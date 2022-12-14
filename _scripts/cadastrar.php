<?php
include "config.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$usuario = $_POST['usuario'];



$sql = "SELECT Id FROM palpiteiro WHERE Email = '$email'";
$query = mysqli_query($mysqli, $sql);
$total = $query->num_rows;



if($total>=1){ ?>
    <script>
        Swal.fire({
            title:'Ops!',
            text:'Usuário já cadastrado',
            icon:'error',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../cadastro.php";
            }
        })
    </script>
    
<?php }else{
    $sql = "INSERT INTO palpiteiro values (NULL, '$email', '$usuario','$senha')";
    $query = mysqli_query($mysqli, $sql);
    
    if($query){ ?>
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title:'Usuário cadastrado com Sucesso',
            showConfirmButton: false,
            timer: 1500
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../login.php";
            }
        })
    </script>
    <?php }else{
        echo "Problema na query!";
    }
}


?>