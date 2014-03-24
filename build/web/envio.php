<html></head><?php require_once('conexion.php'); ?> 
<?php
$lat=$_POST["latitud"];
$lon=$_POST["longitud"];
if($_POST["comentario"]){
$com=$_POST["comentario"];
$calle="-----EN DESARROLLO-----";
mysql_select_db($database_dasavi_codes, $dasavi_codes); 
$query_java = "INSERT INTO ovnis (latitud,longitud,calle,time,comentario) VALUES ('$lat','$lon','$calle',Now(),'$com')"; }
else
 {
$calle="-----EN DESARROLLO-----";
$comentario="sin comentarios...";
mysql_select_db($database_dasavi_codes, $dasavi_codes); 
$query_java = "INSERT INTO ovnis (latitud,longitud,calle,time,comentario) VALUES ('$lat','$lon','$calle',Now(),'$comentario')";
}
$result=mysql_query($query_java);
?>
</head>
  <body background="pics/fondo.png">
<center>
<?php echo "Envio realizado, gracias por su aportacion!";?>
    <div id="sample_container_id">
      <h1><p id="sample_text_id"></p></h1>
    </div>

    <script type="application/dart" src="locaso.dart"></script>
    <script src="packages/browser/dart.js"></script></center>
  </body>
</html>

