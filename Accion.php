<?php
 function Insertar(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='INSERT INTO ALUMNOS1 VALUES("'.$_POST["dni"].'","'.$_POST["nombre"].'","'.$_POST["apellido"].'")';
    $resultado=mysqli_query($conexion,$consulta); 
 }
 
 function Borrar(){
    $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
    $consulta='DELETE FROM `alumnos1` WHERE alu_dni="'.$_GET["id"].'"';
    $resultado=mysqli_query($conexion,$consulta);
 }
 
 Function Modificar(){
   $conexion=mysqli_connect('localhost','root','','sga_Belgrano');
   $consulta='UPDATE `alumnos1` SET `alu_nombre`="'.$_POST["nombre"].'",`alu_apellido`="'.$_POST["apellido"].'" WHERE `alu_dni`="'.$_POST["dni"].'"' ;
   $resultado=mysqli_query($conexion,$consulta);  
     
 }

