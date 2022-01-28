<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
      <H2>PROGRAMACION ORIENTADA A OBJETOS EN PHP</H2>
      <?php
         require_once('../clases/clase.php'); 
         require_once('../clases/cliente.php');
         require_once('../clases/Productos.php');

         echo "<p>probando php</p>";
      
         $coche = new Coche();
         echo $coche -> getColor();
         echo $coche -> color;

         echo "<h3>Clases y Objetos</h3>";

         $objeto = new ClasePropiedades();//instanciar
         echo $objeto -> ciudad;

         $cli = new Cliente("indra",3,true);
         echo "<p>" . $cli -> getNombre() . "</p>";

         //modificar el nombre del cliente
         $cli -> setNombre("Repsol");
         echo "<p>" . $cli -> getNombre() . "</p>";

         echo "<hr>";
         echo "<h3>ACTIVIDAD</h3>";

         $producto1 = new Producto(100 ,"camisa" ,5 ,7.99);
         echo $producto1 -> mostrar();

         echo "despues:";
         //modificar precio producto1 
         $producto1 -> setPrecio(7.95);
         echo $producto1 -> mostrar();

         echo "TOTAL(con iva):". $producto1 -> calcularTotal();  ;


      ?>
   </body>
</html>