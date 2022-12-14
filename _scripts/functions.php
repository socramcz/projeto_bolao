<?php
    function dadosUser($email){
    include "config.php";
    $sql = "SELECT usuario FROM palpiteiro WHERE usuario = '$email'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['login'];

    function validarUsuario($cpf,$tabela){
        include "config.php";
        $sql = "SELECT id FROM $tabela WHERE cpf = '$cpf'";
        $query = $mysqli->query($sql);
        $total = $query->num_rows;
    
        return $total;
    
    }
}
