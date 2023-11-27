<?php
 $hostname="localhost";
 $username="id21316961_admin0508";
 $password="Admin@050831";
 $dbname="id21316961_bdsenai050831";
 $usertable="tb_usuario";
 
 $con=mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert
 ('Unable to connect to database! Please try again later.'),history.go(-1)/script/html>");
 
 mysqli_select_db($con, $dbname);
 
 $query = "SELECT * FROM $usertable";
 
 $result = mysqli_query($con,$query);
 
 print_r($result);
 
 if($result) {
     while($row = mysqli_fetch_array($result)){
         echo "<br/>";
         $id = $row["id"];
         $email = $row["email"];
         $celular = $row["celular"];
         $senha = $row["senha"];
         echo "id: ".$id."<br/>";
         echo "email: ".$email."<br/>";
         echo "celular: ".$celular."<br/>";
         echo "senha: ".$senha."<br/>";
     }
 }
 
 $login="usuariosenai@email.com.br";
 $senha="senha";
 
 $query = 'SELECT * FROM '.$usertable.' where email="'.$login.'" or celular="'.$login.'"';
 
 echo "<br/>";
 echo $query;
 
 $result = mysqli_query($con,$query);
 
 $rowcount=mysqli_num_rows($result);
 
 echo "<br/>";
 if($rowcount==0) {
     echo "Usuario ou senha invalido!";
 }
 else {
     print_r($result);
     if($result) {
        $row = mysqli_fetch_array($result);
        if($senha!=$row["senha"]){
             echo "Usuario ou senha invalido!";
        }
        else {
         $id = $row["id"];
         $email = $row["email"];
         $celular = $row["celular"];
         $senha = $row["senha"];
         echo "id: ".$id."<br/>";
         echo "email: ".$email."<br/>";
         echo "celular: ".$celular."<br/>";
         echo "senha: ".$senha."<br/>";
        }
    }
 }
?>