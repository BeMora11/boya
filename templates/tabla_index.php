<?php
include_once '../php/conexion.php';
$conexion = new DB();

$query = $conexion->connect()->query("SELECT * FROM dispositivo ORDER BY id_mensaje ASC");
$query->execute();
$row = $query->fetchAll();

$fila = '';

foreach ($row as $item) {
  $fila .= '<tr class="text-center">
                <td>' . $item['id_mensaje'] . '</td>
                <td>' . strftime("%d/%m/%Y %I:%M %p", strtotime($item['fecha'])) . '</td>
                <td>' . $item['oxigeno'] . ' O<sub>2</sub>' . '</td>
                <td>' . $item['temperatura'] . ' °C' . '</td>
                <td>' . $item['turbidez'] . ' m' . '</td>
                <td>' . $item['dioxido_carbono'] . ' CO<sub>2</sub>' . '</td>
              </tr>';
}

?>

<table id="tabla_index" class="table table-striped table-sm">
  <thead class="table-dark">
    <tr class="text-center">
      <th>ID mensaje</th>
      <th>Fecha del mensaje</th>
      <th>O<sub>2</sub></th>
      <th>°C</th>
      <th>m</th>
      <th>CO<sub>2</sub></th>
    </tr>
  </thead>
  <tbody>
    <?php echo $fila ?>
  </tbody>
</table>

<script type="text/javascript">
  $('#tabla_index').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'excel',
    ],
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending: ": Activar para ordenar la columna de manera ascendente",
        sSortDescending: ": Activar para ordenar la columna de manera descendente",
      },
      buttons: {
        copy: "Copiar",
        colvis: "Visibilidad",
      },
    },
    order: [
      [0, "desc"]
    ]
  });
</script>