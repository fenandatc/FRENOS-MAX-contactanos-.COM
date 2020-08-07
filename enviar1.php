<?php
 $DESTINO ="isabelcanaricamayo@gmail.com";
 $NOMBRE =$_POST["NOMBRE"];
 $CORREO =$_POST["CORREO"];
 $TELEFONO =$_POST["TELEFONO"];
 $MENSAJE =$_POST["MENSAJE"];
 $CONTENIDO = "NOMBRE:" . $NOMBRE . "\nCORREO:" . $CORREO . "\nTELEFONO:" . $TELEFONO . "\nMENSAJE:" . $MENSAJE ;
mail($DESTINO,"contacto", $CONTENIDO);
header("location:index.html")

 ?> 