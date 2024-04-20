<script src="../js/sweetalert2@10.js"></script>
<?php
require "../config/conexion.php";


$sql = "SELECT * FROM ventas";
// SELECT * FROM ventas WHERE datetime BETWEEN '$fecha1' AND '$fecha2'

// INSERT INTO venta_empanadas(cantidad_empanadas, precio, fecha_sys) VALUES ('12', 12.000,00, now())



$result = $conexion->query($sql);

if ($result-> rowCount() > 0 ){

echo "<script>
            Swal.fire({
              title: 'Venta Actualizada Correctamente',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Hecho'
            });
          </script>";
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "Id: " . $row["id"]. " - Cantidad de Empanadas: " . $row["cantidad_empanadas"]. " " . " Precio: " . $row["precio"]. " Fecha de creación: " . $row["fecha_sys"] . "<br>";
          }

}else {
    echo "<script>
    Swal.fire({
      title: 'Error eliminando',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    })
  </script>";

}






?>