<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$id = $_POST['eliminar']; // 

//Paso 3: Armo la sentencia sql que necesite
$sql = "DELETE FROM ventas WHERE id='" . $id . "'";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql) === TRUE) // 
{
    echo "transferencia exitosa";
    echo "<script>
            Swal.fire({
              title: 'Registro eliminando correctamente',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Hecho'
            });
          </script>";

}else{
    echo "error transfiriendo saldo";
    echo "<script>
    Swal.fire({
      title: 'Error al eliminar un registro',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    })
  </script>";
}




//echo "el pin digitado fue: ";
//echo $pin;
//echo "el valor fue: ".$valor;




?>