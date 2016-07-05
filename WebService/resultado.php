<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Avicola Lescano - Costos</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="form-main">
  <div id="form-div">
<?php
// process form
$con = mysql_connect("localhost", "pbarreto", "pedro2016") or die("Sin Conexion");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("insumos", $con);

$sql="INSERT INTO t_insumos_mensual (MES, INSUMO, PRECIO_UNIT, PRECIO_TOTAL)
VALUES
('$_POST[mes]','$_POST[insumo]', '$_POST[precio_unit]','$_POST[precio_total]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1 class='titulo'>¡Gracias! Hemos recibido sus datos.\n</h1>";
mysql_close($con)
?>
<div align="center"><img src="logoAvicola.jpg"></div>
  </div>
</body>
</html>
