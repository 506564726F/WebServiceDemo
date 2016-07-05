<?php
$MES = $_REQUEST["MES"];
$con = mysql_connect("localhost", "pbarreto", "pedro2016") or die("Sin Conexion");
mysql_select_db("insumos");
$sql = "SELECT MES, INSUMO, PRECIO_UNIT, PRECIO_TOTAL FROM t_insumos_mensual WHERE MES='$MES'";
$rs = mysql_query($sql,$con);
while($row = mysql_fetch_object($rs)){
		$datos[] = $row;
	}
	echo json_encode($datos);
?>