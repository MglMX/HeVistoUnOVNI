        <?php require_once('conexion.php');?>
        <?php 
        mysql_select_db($database_dasavi_codes, $dasavi_codes); 
        $query = "SELECT * FROM ovnis"; 
        $cplusplus = mysql_query($query, $dasavi_codes) or die(mysql_error()); 
        $row = mysql_fetch_assoc($cplusplus); 
        $totalRows = mysql_num_rows($cplusplus);
        mysql_select_db($database_dasavi_codes, $dasavi_codes); 
            
        ?>
