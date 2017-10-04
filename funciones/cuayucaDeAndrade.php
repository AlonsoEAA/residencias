<?php
include ("conexion.php");

$query = "SELECT * FROM cuayucaDeAndrade";
$resultado=$conexion->query($query);
$numero = mysqli_num_rows($resultado);

$n1=1; $n2=0; $su=0;
$latitude = '';
$longitude = '';

for ($i=0; $i <$numero-1 ; $i++)
{


  $su = $n1 + $n2;
  $n2 = $su;

  $query = "SELECT * FROM cuayucaDeAndrade WHERE id='$su'";
  $resultado=$conexion->query($query);
  while ($row = $resultado->fetch_assoc())
  {
    $latitude = $row['lat'];
    $longitude = $row['lng'];
  }
  echo "{lat: "," ",$latitude,","," ","lng: ",$longitude,"}",",";
  }
  echo "{lat: "," ",$latitude,","," ","lng: ",$longitude,"}";
?>