<style>
    body{
        background-color: #d1e9f7;
    }
</style>

<?php
$select1=filter_input(INPUT_POST,"select1");
$select2=filter_input(INPUT_POST,"select2");

include("../model/classePizza.php");
$objeto=new Pizza();  

$objeto->select1=$select1;
$objeto->funcaopizza1($select1,$select2);
?>