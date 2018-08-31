
<?php
$local="localhost"; 
$user="root";        
$senha="";         
$database="pizza";
$conectar= new mysqli($local,$user,$senha,$database);  

$conectar->set_charset("utf8"); 
?>