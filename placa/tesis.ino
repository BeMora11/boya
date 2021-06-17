#include "NXTIoT_dev.h"
#include <SoftwareSerial.h>//incluimos SoftwareSerial
#include <TinyGPS.h>//incluimos TinyGPS

NXTIoT_dev  mysigfox;

TinyGPS gps;//Declaramos el objeto gps
SoftwareSerial serialgps(4, 3);//Declaramos el pin 4 Tx y 3 Rx

const int sensorPin = A0;

//Declaramos la variables para la obtención de datos
int year;
byte month, day, hour, minute, second, hundredths;
unsigned long chars;
unsigned short sentences, failed_checksum;

void setup(){
  Serial.begin(9600);//Iniciamos el puerto serie
  serialgps.begin(9600);//Iniciamos el puerto serie del gps
}

void coordenadas(){
  float latitude, longitude;
  //Coordenadas
  gps.f_get_position(&latitude, &longitude);
  Serial.print("Latitud/Longitud: "); 
  Serial.print(latitude,5); 
  Serial.print(", "); 
  Serial.println(longitude,5);
  //Envio de mensajes
  mysigfox.initpayload();
  mysigfox.addfloat(latitude);
  mysigfox.addfloat(longitude);
  mysigfox.sendmessage();
}

void leer_datos(){
  int sensorValue = analogRead(sensorPin);
   
  //Serial.println(sensorValue);

  //Sensores  
  //int sensorVal=analogRead(sensorPin);
  float voltaje=(sensorValue/1024.0)*5;
  //Serial.print("Voltaje: ");
  //Serial.println(voltaje); 
  //Serial.print("Grados Cº: ");
  int temp=((voltaje)*100);
  int oxigen = (temp / 3);
  int turbidez = (temp / 2);
  int dioxido (turbidez / 5);
  //Serial.println(temp);

  //Envio de mensajes
  mysigfox.initpayload();
  mysigfox.addint(temp);
  mysigfox.addint(oxigen);
  mysigfox.addint(turbidez);
  mysigfox.addint(dioxido);
  mysigfox.sendmessage();
}

void loop(){
   while(serialgps.available()){
    int c = serialgps.read(); 
    if(gps.encode(c)){
      coordenadas();
      leer_datos();
      delay(5000);
    }
  }
}
