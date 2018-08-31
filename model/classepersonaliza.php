<style>
    a{
        text-decoration: none;
        background: #9595f0;
        font-size: 25px;
    }
</style>

<?php
class Pizza{
    public $select1,$select2,$extrabacon1,$semcebola1,$marguerita1,$extrabacon2,$semcebola2,$marguerita2,$calc,$valorfinal,$tempo,$detalhe,$id,$unir,$bordarecheada1,$bordarecheada2,$valorpego1,$valorpego2;
    
    public function __set($atributo,$valor){
        $this->$atributo=$valor;        
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    
     public function listarPizzaUM($id){
        include ("../model/conexaobanco.php");  
        $lista=array();
        $sql="select * from pizza where id='$id'";
   
        $listar=$conectar->query($sql); 
     
        while($dados=$listar->fetch_array()){
            $lista[]=$dados;  
        }    
        return $lista;
    }
        
public function funcaopizza2($id,$extrabacon1,$extrabacon2,$semcebola1,$semcebola2,$marguerita1,$marguerita2,$bordarecheada1,$bordarecheada2){
if($extrabacon1 || $extrabacon2) {
$this->id=$id;
include("conexaobanco.php");

        if($extrabacon1){
    $detalhe="Personalizacao1=".$extrabacon1;
    $this->detalhe=$detalhe;
    }
     else if($extrabacon2){
    $detalhe="Personalizacao2=".$extrabacon2;
    $this->detalhe=$detalhe;  
     }

$sql3="SELECT * FROM pizza where id=$id";
$inserir1=$conectar->query($sql3);
    
    while($linha=$inserir1->fetch_array()){ 
        $valorpego1 = $linha['valorfinal'];
        $valorpego2 = $linha['id'];
        $tempo=$linha['tempo'];
    }
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'3.00';
     $this->valorpego2=$valorpego2;
     $this->tempo=$tempo;
     
        $sql= "UPDATE pizza SET valorfinal='$calc',personalizacao='$this->detalhe' WHERE id='$id'"; 
$inserir2=$conectar->query($sql);
            
if($sql){
        echo "PERSONALIZADO<br>";
        echo "<br></br><a href='../view/acessopizza.html'>INICIO</a>";
        echo "<br></br>
        <a href='../view/finalizar.php?id=$valorpego2'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
}else{
   echo "NÃO FOI POSSIVEL PERSONALIZAR";
    echo "<br></br><a href='../view/acessopizza.html'>INICIO</a>";
        echo "<br></br>";
}
}
    
if($extrabacon1 and $extrabacon2){
include("conexaobanco.php");

     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'6.00';
     $detalhe="Personalizacao1=".$extrabacon1."Personalização2=".$extrabacon2;
     $this->detalhe=$detalhe;  

        $sql="UPDATE pizza SET valorfinal='$calc',personalizacao='$this->detalhe' WHERE id='$id'";
$inserir3=$conectar->query($sql);  
}

 if($extrabacon1  || $extrabacon2 and $semcebola1){
include("conexaobanco.php");
     
if($extrabacon1 and $semcebola1){   
    $detalhe="Personalizacao1= ".$extrabacon1." Personalizacao2= ".$semcebola1;
     $this->detalhe=$detalhe;
}
     else if($extrabacon2 and $semcebola1){
  $detalhe="Personalizacao1= ".$extrabacon2." Personalizacao2= ".$semcebola1;
 $this->detalhe=$detalhe;  
     }
    
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'3.00';
     $this->valorpego2=$valorpego2;

        $sql5="UPDATE pizza SET valorfinal='$calc',personalizacao='$this->detalhe' WHERE id='$id'";
$inserir5=$conectar->query($sql5);  
     exit;
 }
         
if($extrabacon1  || $extrabacon2 and $semcebola2){ 
include("conexaobanco.php");
   
if($extrabacon1 and $semcebola2){
  $detalhe="Personalizacao1= ".$extrabacon1." Personalizacao2= ".$semcebola2;
$this->detalhe=$detalhe;
}
else if($extrabacon2 and $semcebola2){       
$detalhe="Personalizacao1= ".$extrabacon2." Personalizacao2= ".$semcebola2;
$this->detalhe=$detalhe;  
}
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'3.00';
     $this->valorpego2=$valorpego2;
    
        $sql="UPDATE pizza SET valorfinal='$calc',personalizacao='$this->detalhe' WHERE id='$id'";
$inserir2=$conectar->query($sql);  
 exit; 
 }

if($semcebola1 || $semcebola2){
include("conexaobanco.php");
     
    if($semcebola1){
    $detalhe="Personalizacao1=".$semcebola1;
    $this->detalhe=$detalhe;
    }
     else if($semcebola2){
    $detalhe="Personalizacao2=".$semcebola2;
    $this->detalhe=$detalhe;  
     }
        $sql="UPDATE pizza SET personalizacao='$this->detalhe' WHERE id='$id'";
  $inserir=$conectar->query($sql);
if($sql){
        echo "PERSONALIZADO<br>";
        echo "<br></br><a href='../view/acessopizza.html'>INICIO</a>";
        echo "<br></br>
        <a href='../view/finalizar.php?id=$id'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
}
    else{
        echo "erro";
    }
   // exit;
}

if($semcebola1 and $semcebola2){
include("conexaobanco.php");  
$detalhe="Personalizacao1=".$semcebola1."Personalizacao2=".$semcebola2;
        $this->detalhe=$detalhe;
        $this->id=$id;
    
            $sql="UPDATE pizza SET personalizacao='$this->detalhe' WHERE id=$this->id";
  $inserir=$conectar->query($sql);   
    exit; 
}   
    
if($semcebola1 and $bordarecheada1){
    
include("conexaobanco.php");  
     $detalhe="Personalizacao1= ".$semcebola1." Personalizacao2= ".$bordarecheada1;
        $this->detalhe=$detalhe;  
$sql3="SELECT * FROM pizza where id=$id";
$inserir1=$conectar->query($sql3);
    
    while($linha=$inserir1->fetch_array()){ 
        $valorpego1 = $linha['valorfinal'];
        $valorpego2 = $linha['id'];
        $tempo=$linha['tempo'];
    }
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'5.00';
     $this->valorpego2=$valorpego2;
     $this->tempo=$tempo+'5.00'; 
  
        $sql="UPDATE pizza SET valorfinal='$calc',tempo='$this->tempo',personalizacao='$this->detalhe' WHERE id=$this->id";
  $inserir=$conectar->query($sql);
exit;
}  
    
if($semcebola1 and $bordarecheada2){
include("conexaobanco.php");
    $detalhe="Personalizacao1= ".$semcebola1." Personalizacao2= ".$bordarecheada1;
$sql3="SELECT * FROM pizza where id=$id";
$inserir1=$conectar->query($sql3);
    
    while($linha=$inserir1->fetch_array()){ 
        $valorpego1 = $linha['valorfinal'];
        $valorpego2 = $linha['id'];
        $tempo=$linha['tempo'];
    }
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'5.00';
     $this->valorpego2=$valorpego2;
     $this->tempo=$tempo+'5.00';
        $sql="UPDATE pizza SET valorfinal='$calc',tempo='$this->tempo',personalizacao='$this->detalhe' WHERE id=$this->id";
    $inserir=$conectar->query($sql);
        exit;
}     
    
     
if($bordarecheada1 || $bordarecheada2){
include("conexaobanco.php");
    
    if($bordarecheada1){
    $detalhe="Personalizacao1=".$bordarecheada1;
    $this->detalhe=$detalhe;
    }
     else if($bordarecheada2){
    $detalhe="Personalizacao2=".$bordarecheada2;
    $this->detalhe=$detalhe;  
     }
    
        $sql3="SELECT * FROM pizza where id=$id";
    $inserir1=$conectar->query($sql3);
    
    while($linha=$inserir1->fetch_array()){ 
        $valorpego1 = $linha['valorfinal'];
        $valorpego2 = $linha['id'];
        $tempo=$linha['tempo'];
    }
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'5.00';
     $this->valorpego2=$valorpego2;
     $this->tempo=$tempo+'5.00';
    
        $sql="UPDATE pizza SET valorfinal='$calc',tempo='$this->tempo',personalizacao='$this->detalhe' WHERE id=$this->id";
  $inserir=$conectar->query($sql);
 if($sql){
        echo "PERSONALIZADO<br>";
        echo "<br></br><a href='../view/acessopizza.html'>INICIO</a>";
        echo "<br></br>
        <a href='../view/finalizar.php?id=$id'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
 }
    else{
        echo "ERRO";
    }
}   
     
if($bordarecheada1 and $bordarecheada2){
include("conexaobanco.php");

$detalhe="Personalizacao1=".$bordarecheada1."Personalizacao2= ".$bordarecheada2;
    $this->detalhe=$detalhe;  

$sql3="SELECT * FROM pizza where id=$id";
$inserir1=$conectar->query($sql3);
    
    while($linha=$inserir1->fetch_array()){ 
        $valorpego1 = $linha['valorfinal'];
        $valorpego2 = $linha['id'];
        $tempo=$linha['tempo'];
    }
     $this->valorpego=$valorpego1;
     $valorfinal=$valorpego1;
     $calc=$valorfinal+'5.00'+'5.00';
     $this->valorpego2=$valorpego2;
     $this->tempo=$tempo+'5.00'+'5.00';
    
        $sql="UPDATE pizza SET valorfinal='$calc',tempo='$this->tempo',personalizacao='$this->detalhe' WHERE id=$this->id";
  $inserir=$conectar->query($sql);
exit;
}   
}
    
public function listarpizzas($id){    
include("conexaobanco.php");
        $this->id=$id;
    
$sql="SELECT * FROM pizza where id='$this->id'";
$inserir=$conectar->query($sql);
    while ($linha = $inserir->fetch_array()){
echo"<table align='center' border='7px'>"; 
    echo"<tr><td>";
echo "<b><font size='6px'>PEDIDO N°:</b>"."$linha[id]";
    echo"<tr><td>";    
    
echo "<b><font size='6px'>DETALHES:</b>"."$linha[detalhesproduto]";
    echo"<tr><td>";
    
echo "<b><font size='6px'>Personalizações:</b>  "."$linha[personalizacao]";    
    echo"<tr><td>";
    
echo "<b><font size='6px'>Valor Total: R$= </b>  "."$linha[valorfinal].00"." reais"; 
      echo"<tr><td>";
    
echo "<b><font size='6px'>Tempo Preparo: = </b>  "."$linha[tempo]"." minutos";
    echo"<tr align='center'><td>";
      }
}    
}
 
?>