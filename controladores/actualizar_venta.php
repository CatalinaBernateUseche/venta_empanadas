<script src="../js/sweetalert2@10.js"></script>
.
<?php
require "../config/conexion.php";
$cantidad = $_POST["cantidad"];
$costo = $_POST["costo"];
$costo_total = $cantidad * $costo;
$id = $_POST["id"];

$sql = "UPDATE ventas SET cantidad_empanadas=$cantidad, precio=$costo_total WHERE id=$id";

// INSERT INTO venta_empanadas(cantidad_empanadas, precio, fecha_sys) VALUES ('12', 12.000,00, now())


// 
if ($conexion->query($sql)){

echo "Compra de empanadas";
echo "Cantidad: $cantidad";
echo "Costo por empanada, $costo";
echo "Costo total: $costo_total";

echo "<script>
            Swal.fire({
              title: 'Venta Actualizada Correctamente',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Hecho'
            });
          </script>";


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