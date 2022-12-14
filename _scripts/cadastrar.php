<?php
include "config.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$usuario = $_POST['usuario'];



$sql = "SELECT Id FROM palpiteiro WHERE Email = '$email'";
$query = mysqli_query($mysqli, $sql);
$total = $query->num_rows;



if($total>=1){
    echo "Usuário já cadastrado";
}else{
    $sql = "INSERT INTO palpiteiro values (NULL, '$email', '$usuario','$senha')";
    $query = mysqli_query($mysqli, $sql);
    
    if($query){
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Problema na query!";
    }
}


?>