<?php
$id=filter_input(INPUT_GET,"id");

include("../model/classepersonaliza.php");
$listaUm = new Pizza();
$valor = $listaUm->listarPizzaUM($id);
foreach($valor as $linha);

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

input{
   width: 100px;
   height: 30px;
}
    
    select.select{
        width:400px;
        height:40px;
        font-size:20px;
        background-color:antiquewhite;
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
<form method="POST" action="../controller/captura2.php">
    <meta charset="utf-8">
    <table align="center">
    
    
 <tr> 
    <td align="center"><font size="7px" color="#f40303">  
    <img src="../icone/ico.JPG"> 
<p>
    <b>PIZZAS</b></font>
</p>
        
<p><font size="5px" color="#100e0e">
    <b>PERSONALIZAR PIZZA!
    </font>
    <font size="5px" color="#0000ff">
    PEDIDO N°- <?php echo "$linha[id]";?>
    </b>
    
      </font>
</p>

<tr>
        <td>
   
<input type="checkbox" value="extrabacon1" name="extrabacon1">
      EXTRA BACON1
<input type="checkbox" value="semcebola1" name="semcebola1">
      SEM CEBOLA1 
<input type="checkbox" value="bordarecheada1" name="bordarecheada1">
     BORDA RECHEADA1        
     <tr>
         <td>   
 <input type="checkbox" value="extrabacon2" name="extrabacon2">
      EXTRA BACON2
<input type="checkbox" value="semcebola2" name="semcebola2">
      SEM CEBOLA2 
<input type="checkbox" value="bordarecheada2" name="bordarecheada2">
     BORDA RECHEADA2             
    </td>   
        </tr>
    
<tr>
    <td align="center">
      <input type="hidden" name="id" value="<?php echo "$linha[id]"; ?>">
      <input type="submit" value="PERSONALIZAR">   
    </td></tr>    

     </td>
        </tr>   
</font>
</form>
</table>
    
<p align="center">
    <b>INFORMAÇÕES</b>
</p>  
    
<p align="center">
    <b>EXTRA BACON</b>: extra bacon terá um valor adicional de R$3,00.
<br>
    <b>SEM CEBOLA</b>: a pizza sem cebola não mudará seu comportamento.
<br>
    <b>BORDA RECHEADA</b>:valor adicional de R$ 5,00 e tempo adicional de preparo de 5 minutos.
    </br>
</p>    
    </body>
</html>
