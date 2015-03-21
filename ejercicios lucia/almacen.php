<html>
<head>
</head>
<title>
</title>
<body>
<?php
$nombre= $_post."Nombre";
$edad= $_post."Edad";
$muni= $_post."Municipio";
$tel= $_post."Telefono";
$casa= $_post."Casa";
$cel= $_post."Celular";

$resultado=$nombre+$Edad+$Municipio+$Telefono+$Casa+$Celular;
?>
<form method "post" name "registros" action "almacen.php"><br></P>
	<P> Nombre: <input type "text"  name="Nombre"><br></P>
	<P> Eda: <input type "text" name= "Edad"><br></P>
  <P> Telfono: <input type "text" name ="Telefono"><br></P>
  <P> Celular:<input type "text" name= "Celular"><br></P>
  <P> Casa: <input type "text" name = "Casa"><br></P>
	<P> Municipio: <input type "text" name ="Municipio"><br></P>
   <input type = "submit"  value= 'Enviar'>
 <input type = "submit"  value= 'Eliminar'>
    </form>
    <p><?php if ($Nombre && $Edad && $Municipio && $Telefono &&  $Casa && $Celular)
                    echo "LOS DATOS INGRESADOS SON=$resultado";
      else
      if ($nombre && !$Edad && !$Municipio && !$Telfono &&  !$Casa && !$Celular )
     echo " Ingrese los descuentos por Favor";

    ?>
    </p>                  
</body>
</html>