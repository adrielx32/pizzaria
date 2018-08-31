<?php
$id  = filter_input(INPUT_POST,"id");
$extrabacon1  = filter_input(INPUT_POST,"extrabacon1");
$semcebola1 = filter_input(INPUT_POST,"semcebola1");
$marguerita1= filter_input(INPUT_POST,"marguerita1");
$bordarecheada1= filter_input(INPUT_POST,"bordarecheada1");

$extrabacon2  = filter_input(INPUT_POST,"extrabacon2");
$semcebola2= filter_input(INPUT_POST,"semcebola2");
$marguerita2= filter_input(INPUT_POST,"marguerita2");
$bordarecheada2= filter_input(INPUT_POST,"bordarecheada2");
include("../model/classepersonaliza.php");
$objetocadastro=new Pizza();  
    $objetocadastro->id=$id;
    $objetocadastro->extrabacon1=$extrabacon1;
    $objetocadastro->semcebola1=$semcebola1;
    $objetocadastro->marguerita1=$marguerita1;
    $objetocadastro->bordarecheada1=$bordarecheada1;

  $objetocadastro->extrabacon2=$extrabacon2;
    $objetocadastro->semcebola2=$semcebola2;
    $objetocadastro->marguerita2=$marguerita2;
 $objetocadastro->bordarecheada2=$bordarecheada2;

     $objetocadastro->funcaopizza2($id,$extrabacon1,$extrabacon2,$semcebola1,$semcebola2,$marguerita1,$marguerita2,$bordarecheada1,$bordarecheada2);

?>