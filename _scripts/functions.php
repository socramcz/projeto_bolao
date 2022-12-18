<?php
function login($email)
{
    include "config.php";
    $sql = "SELECT login FROM login WHERE email = '$email'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return $dados['login'];

    function validarUsuario($id, $tabela)
    {
        include "config.php";
        $sql = "SELECT id FROM $tabela WHERE email = '$id'";
        $query = $mysqli->query($sql);
        $total = $query->num_rows;

        return $total;
    }
}