<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de Productos</title>
    </head>
    <body> 
    <h1>Reporte de Productos</h1><br><br>
   
        <?php
  $i=1;  
  $j=0;
  require_once("conexion.php");     
  require_once("seleccion.php");
 
  while($fetch=mysql_fetch_array($res)) 
  {
     if($fetch['nombre']!="")
     {
     if($i<10) 
     {echo "000".$i.".- ".$fetch['nombre']."<br>";}
    
     if( $i>9 && $i<100) 
     {echo "00".$i.".- ".$fetch['nombre']."<br>";}
     
     if($i<1000 && $i>99) 
     {echo "0".$i.".- ".$fetch['nombre']."<br>";}
      
     if($i>999) 
     {echo $i.".- ".$fetch['nombre']."<br>";}
     $i++;}
     if($fetch['nombre']==null)
     {$j++;}
     
     
  }
     echo "-----------------------------------------------------------------------------------"."<br>";
     echo "Tenemos en la base de datos ".($i-1)." productos con sus respectivos nombres."."<br>";
     echo "Se ha encontrado un total de ".$j." productos sin nombre."."<br>";
     echo "-----------------------------------------------------------------------------------"."<br>"."<br>";
     echo "Fin del Reporte";
     
        ?>
    </body>
</html>
