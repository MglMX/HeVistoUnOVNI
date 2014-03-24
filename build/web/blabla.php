<!DOCTYPE html>

<html>
  <head>
    <?php require_once('conexion.php'); ?> 
    <?php require_once('mostrar.php'); ?> 
<?php function MySQLDateToDateDIA($MySQLFecha)  
    {  
        if (($MySQLFecha == "") or ($MySQLFecha == "0000-00-00") )  
    {return "";}  
        else 
    {return date("d/m/Y",strtotime($MySQLFecha));}  
        } ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample app</title>
    <link rel="stylesheet" href="style.css">
    
    <!-- import the click-counter -->
<body background="pics/fondo.png">
    <div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a><img src="pics/banner.png"/></a></h1>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a>  </a></li>
			<li><a class="actual">Timeline</a></li>
		</ul>
	</div>
  </head>
  
	<div id="timeline">
    <?php 
        $contador=1; 
    do { ?> 
    <table border="1px">
        <tr>
            <td width="420px"><h3>Latitud:<?php echo $row['latitud']; ?></h3></td>
                <td width="500px"><h3><center>Fecha/hora:<?php echo $row['time'];?></center></h3></td>
        </tr>
        <tr>
           <td colspan="2"> <h3>Longitud:<?php echo $row['longitud']; ?></h3></td>
        </tr>
        <tr>
            <td colspan="2"><h3>calle: <?php echo $row['calle']; ?><br /></h3></td>
        </tr>
        <tr>
            <td colspan="2"><h3>Comentario: <?php echo $row['comentario']; ?><br /></h3></td>
        </tr>
    </table>
        <div id="linea"></div>
    <?php  
    $contador++;} while ($row = mysql_fetch_assoc($cplusplus)); ?> 
    </div>
  </body>
</html>
