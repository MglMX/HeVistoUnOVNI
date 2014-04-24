<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dasavi_codes = "50.87.149.92"; 
$database_dasavi_codes = "dasavi_hevistounovni"; 
$username_dasavi_codes = "dasavi_ovni"; 
$password_dasavi_codes = "felixfiera"; 
$dasavi_codes = mysql_connect($hostname_dasavi_codes, $username_dasavi_codes, $password_dasavi_codes) or trigger_error(mysql_error(),E_USER_ERROR);  
?> 
