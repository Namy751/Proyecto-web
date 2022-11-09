<?php
    include ('conexion.php');

    $name = $_POST['nombre'];
    $product = $_POST['producto'];
    $brand = $_POST['marca'];
    $skin = $_POST['tipo_piel'];
    $condition= $_POST['afeccion'];
    $description= $_POST['descripcion'];
    $precio = $_POST['precio'];
    $photo = $_POST['foto'];

        $insert = "INSERT INTO products (id, nombre, producto, marca, tipo_piel, afeccion, descripcion, precio, foto)
        values ('0','$name', '$product', '$brand','$skin', '$condition', '$description','$precio','$photo')";
    
        $ir = mysqli_query($con,$insert);
    
        if($ir){
            echo "<script>
            alert('Se ha registrado con exito');
            location.href = 'registroproductos.html';
        </script>";
        } else {
            echo "Se encontró un error";
        }
   
        mysqli_close($con);
?>