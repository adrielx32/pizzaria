<?php
$id=filter_input(INPUT_GET,"id");

include("../model/classepersonaliza.php");
$listaUm = new Pizza();
$valor = $listaUm->listarpizzas($id);
?>

<html>
<head>
    <title>PIZZA</title>
<style>
    p{
        font-size: 20px;
        color:#100e0e;
    }
    body{
        background-color: #d1e9f7;
    }


    a{
   width:160px;
   height:40px;
   background-color:#69cece; 
   font-size:45px;
    color:black;
    }
    
    img{
        width:150px;
        height:120px;
    }
    input{
        width:160px;
        height:40px;
        font-size:18px;
        background-color:#69cece;
    }
</style>       
</head>
<body>


 <script language='JavaScript'> 
function varitext(text){
text=document
print(text)
}
</script>
<INPUT NAME='print' TYPE='button' VALUE='IMPRIMIR'
ONCLICK='varitext()'/>
<br><br>
    <a href='../view/acessopizza.html'><b>INICIO</b></a>
        </br>
    </body>
</html>
