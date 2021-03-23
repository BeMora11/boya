function datos() {
  $("#tabIndex").load("templates/tabla_index.php");
}

setInterval(async () => {
  let res = await fetch("php/variables.php");
  let data = await res.json();

  // console.log(data.length);
  setTimeout(async () => {
    try {
      let resa = await fetch("php/variables.php");
      let dataa = await resa.json();
      if (dataa.length > data.length) {
        datos();
      }
    } catch (err) {
      console.log(err);
    }
  }, 1000);
}, 1000);

//Gauges de la pagina principañ
if (
  document.getElementById("oxigeno") &&
  document.getElementById("temperatura") &&
  document.getElementById("turbidez") &&
  document.getElementById("co2")
) {
  google.charts.load("current", { packages: ["gauge"] });
  google.charts.load("current", { packages: ["line"] });
  google.charts.setOnLoadCallback(drawChart);

  async function drawChart() {
    let res = await fetch("php/consulta_variables.php");
    let data = await res.json();

    var oxigeno = google.visualization.arrayToDataTable([
      ["Label", "Value"],
      ["Oxígeno", data.oxigeno],
    ]);
    var temperatura = google.visualization.arrayToDataTable([
      ["Label", "Value"],
      ["Temperatura", data.temperatura],
    ]);
    var turbidez = google.visualization.arrayToDataTable([
      ["Label", "Value"],
      ["Turbidez", data.turbidez],
    ]);
    var co2 = google.visualization.arrayToDataTable([
      ["Label", "Value"],
      ["CO2", data.dioxido_carbono],
    ]);

    var options = {
      width: 400,
      height: 120,
      redFrom: 90,
      redTo: 100,
      yellowFrom: 75,
      yellowTo: 90,
      minorTicks: 5,
    };

    var chartOxigeno = new google.visualization.Gauge(
      document.getElementById("oxigeno")
    );
    var chartTemperatura = new google.visualization.Gauge(
      document.getElementById("temperatura")
    );
    var chartTurbidez = new google.visualization.Gauge(
      document.getElementById("turbidez")
    );
    var chartCO2 = new google.visualization.Gauge(
      document.getElementById("co2")
    );

    chartOxigeno.draw(oxigeno, options);
    chartTemperatura.draw(temperatura, options);
    chartTurbidez.draw(turbidez, options);
    chartCO2.draw(co2, options);

    setInterval(async () => {
      let res = await fetch("php/consulta_variables.php");
      let data = await res.json();
      oxigeno.setValue(0, 1, data.oxigeno);
      chartOxigeno.draw(oxigeno, options);
      temperatura.setValue(0, 1, data.temperatura);
      chartTemperatura.draw(temperatura, options);
      turbidez.setValue(0, 1, data.turbidez);
      chartTurbidez.draw(turbidez, options);
      co2.setValue(0, 1, data.dioxido_carbono);
      chartCO2.draw(co2, options);
      // console.log(data.temperatura);
    }, 5000);
  }
}

// Grafica para temperatura

if (document.getElementById("graficaTemp")) {
  (async () => {
    const res = await fetch("php/variables.php");
    const data = await res.json();
    // console.log(data);

    // console.log(temp);

    const grafica = document.getElementById("graficaTemp");
    const datos = {
      label: "Ventas por mes",
      // Pasar los datos igualmente desde PHP
      data: temp, // <- Aquí estamos pasando el valor traído usando AJAX
      backgroundColor: "rgba(54, 162, 235, 0.2)", // Color de fondo
      borderColor: "rgba(54, 162, 235, 1)", // Color del borde
      borderWidth: 1, // Ancho del borde
    };

    new Chart(grafica, {
      type: "line", // Tipo de gráfica
      data: {
        labels: [
          "Enero",
          "Febrero",
          "Marzo",
          "Abril",
          "Mayo",
          "Junio",
          "Agosto",
          "Septiembre",
          "Octubre",
          "Noviembre",
          "Diciembre",
        ],
        datasets: [
          datos,
          // Aquí más datos...
        ],
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      },
    });
  })();
}
