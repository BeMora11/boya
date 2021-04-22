#include "NXTIoT_dev.h"

NXTIoT_dev  mysigfox;

const int boton=6;
const int sensorPin = A0;

void setup() 
{
  Serial.begin(9600);
  pinMode(boton, INPUT);
}

void leer_temperatura()
{
  int sensorValue = analogRead(sensorPin);
  //Serial.println(sensorValue);
  
  //int sensorVal=analogRead(sensorPin);
  float voltaje=(sensorValue/1024.0)*5;
  //Serial.print("Voltaje: ");
  //Serial.println(voltaje); 
  //Serial.print("Grados Cº: ");
  float temp=((voltaje)*100);
  int oxigen = (temp / 3);
  int turbidez = (temp / 2);
  int dioxido (turbidez / 5);
  //Serial.println(temp);
  mysigfox.initpayload();
  mysigfox.addfloat(temp);
  mysigfox.addint(oxigen);
  mysigfox.addint(turbidez);
  mysigfox.addint(dioxido);
  mysigfox.sendmessage();
}

void loop() 
{
  if (digitalRead(boton)==LOW)
  {
    leer_temperatura();
    delay(500);
  } 
}
