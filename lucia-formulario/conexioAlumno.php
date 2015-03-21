<?php
include './clases/Coneccion.php';

include './clases/AlumnoControlador.php';
$con = new Coneccion();
$alumnoA = new AlumnoControlador();
if ($con->conectar()){
    
    if(isset($_REQUEST['bot'])){
    $alumno->setId('NULL');
    $alumno->setNombre($_REQUEST['Nombre']);
    $alumno->setApellido($_REQUEST['Apellido']);
    $alumno->setCarnet($_REQUEST['Carnet']);
    $alumno->setDir($_REQUEST['Direccion']);
    $alumno->setFechaNac($_REQUEST['fecha']);

    $datosObj=array($alumno->getId(),
                    $alumno->getNombre(),
                    $alumno->getApellido(),
                    $alumno->getFechaN(),
                    $alumno->getDirrecio(),
                    $alumno->getCarnet());
 
    print $alumnoA->guardarregistro($datosObj);
}else{
    print 'No se ha enviado el registro ';
    
}
    
}  else {
    print $con->conectar();
}