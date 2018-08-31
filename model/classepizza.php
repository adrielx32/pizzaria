<style>
    a{
        text-decoration: none;
        background: #9595f0;
        font-size: 25px;
    }
</style>

<?php
class Pizza{
    public $select1,$select2,$calc,$valorfinal,$tempo;
    
    public function __set($atributo,$valor){
        $this->$atributo=$valor;        
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    
    
    public function funcaopizza1($select1,$select2){
if ($select1==="grande" & $select2==="portuguesa"){ 
$this->select1=$select1;
$this->select2=$select2;
    
    $this->valorfinal=$valorfinal='40.00';
    
    $this->tempo=$tempo='25'+'5';
    
    $detalhe="Tamanho= ".$select1." Sabor=".$select2;
    $this->detalhe=$detalhe;

$sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php"); 
     $cadastro=$conectar->query($sql);
    
     if($cadastro){
     echo " <br></br>REGISTRADO PEDIDO N°--";   
     }
     else{
     return "-- NÃO REGISTRADO--";
     }
    
$idInserido=mysqli_insert_id($conectar);
echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);
    
    while ($linha = $inserir->fetch_array()){
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 
        
        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>"; 
      }
}
        
 else if($select1==="grande" & $select2==="calabresa"){ 
$this->select1=$select1;
$this->select2=$select2;
     
    $this->valorfinal=$valorfinal='40.00';
     
    $this->tempo=$tempo='25';
     
    $detalhe="Tamanho= ".$select1." Sabor=".$select2;
    $this->detalhe=$detalhe;
     
$sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php"); 
  
     $cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }
     
$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);

      while ($linha = $inserir->fetch_array()){
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 
          
        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";   
}
 }
 
else if($select1==="grande" & $select2==="marguerita"){
$this->select1=$select1;
$this->select2=$select2;
  
    $this->tempo=$tempo='25';
   
    $this->valorfinal=$valorfinal='40.00';
   
    $detalhe="Tamanho= ".$select1." Sabor=".$select2;

    $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php");  
$cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }

$idInserido=mysqli_insert_id($conectar);
echo $idInserido;
    
    $sql2="SELECT * FROM pizza where id=$idInserido";
    $inserir=$conectar->query($sql2);

    while ($linha = $inserir->fetch_array()){
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO 
        PERSONALIZAR</a>"; 
        
        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
}
}
        
else if($select1==="pequena" & $select2==="calabresa"){
$this->select1=$select1;
$this->select2=$select2;

    $this->calc=$calc='15';
    
    $this->valorfinal=$valorfinal='20.00';
        
    $detalhe="Tamanho=$select1"."Sabor=$select2";
  
    $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) VALUES ('$this->calc','$this->valorfinal','$detalhe')";
 
include ("conexaobanco.php"); 
$cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }

$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);

    while ($linha = $inserir->fetch_array()){
        
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 

        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
    }
 }

 else if($select1==="pequena" & $select2==="marguerita"){
     
     $this->valorfinal=$valorfinal='20.00';
     $this->tempo=$tempo='15';
        
     $detalhe="Tamanho= ".$select1." Sabor=".$select2;
     $this->detalhe=$detalhe;
    
     $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php"); 
$cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }
     
$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);
     
    while ($linha = $inserir->fetch_array()){
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>";
        
        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
}
 }
                  
 else if($select1==="pequena" & $select2==="portuguesa"){
    
     $this->valorfinal=$valorfinal='20.00';
     
     $this->tempo=$tempo='15'+'5';
     
     $detalhe="Tamanho= ".$select1." Sabor=".$select2;
     
     $this->detalhe=$detalhe;
      
$sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";
     
include ("conexaobanco.php"); 
     $cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }

$idInserido=mysqli_insert_id($conectar);
echo $idInserido;
    
    $sql2="SELECT * FROM pizza where id=$idInserido";
    $inserir=$conectar->query($sql2);

     while ($linha = $inserir->fetch_array()){
     
         echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
         echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 
         
         echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
    } 
 }

else if($select1==="media" & $select2==="calabresa"){
   
     $this->valorfinal=$valorfinal='30.00';
     
     $this->tempo=$tempo='20';

     $detalhe="Tamanho= ".$select1." Sabor=".$select2;
     
     $this->detalhe=$detalhe;
   
     $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php"); 
  
     $cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }
    
$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);

      while ($linha = $inserir->fetch_array()){
        
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 
          
        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";    
}
    
}

 else if($select1==="media" & $select2==="marguerita"){
     $this->valorfinal=$valorfina='30.00';
     
     $this->tempo=$tempo='20';
        
     $detalhe="Tamanho= ".$select1." Sabor=".$select2;
    
     $this->detalhe=$detalhe;
  
     $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";
     
include ("conexaobanco.php"); 
$cadastro=$conectar->query($sql);
     
     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }

$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
 
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);

      while ($linha = $inserir->fetch_array()){

          echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
          echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 

          echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";    
    }
 }
        
else if($select1==="media" & $select2==="portuguesa"){
     $this->valorfinal=$valorfinal='30.00';
    
     $this->tempo=$tempo='20';
    
     $detalhe="Tamanho= ".$select1." Sabor=".$select2;
     
     $this->detalhe=$detalhe;
    
     $sql="INSERT INTO pizza(tempo,valorfinal,detalhesproduto) 
      VALUES ('$this->tempo','$this->valorfinal','$detalhe')";

include ("conexaobanco.php"); 
  
     $cadastro=$conectar->query($sql);

     if($cadastro){
         echo " <br></br> REGISTRADO PEDIDO N° --";    
     }
        
     else{
     return "-- NÃO REGISTRADO --";
     }
    
$idInserido=mysqli_insert_id($conectar);
    echo $idInserido;
    
$sql2="SELECT * FROM pizza where id=$idInserido";
$inserir=$conectar->query($sql2);

      while ($linha = $inserir->fetch_array()){
        echo "<br></br><a href='../view/alterarpizza.php?id=$linha[id]'>PERSONALIZAR</a>";
        
        echo "<br></br><a href='../view/acessopizza.html'>NÃO PERSONALIZAR</a>"; 

        echo "<br></br>
        <a href='../view/finalizar.php?id=$linha[id]'>        
<img src='../icone/resumo.jpg' width='50px' height='50px'>
        INFORMAÇÕES PEDIDO</a>";  
            }
}
    }
}
     
?>