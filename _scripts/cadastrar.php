<?php
include "config.php";
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$usuario = $_POST['usuario'];



$sql = "SELECT Id FROM palpiteiro WHERE Email = '$email'";
$query = mysqli_query($mysqli, $sql);
$total = $query->num_rows;



if($total>=1){
    ?>
        <script type="text/javascript">
        Swal.fire({
            title: 'Ops!',
            text: 'Usuario ja cadastrado',
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    </script>;
    }
<?php }else{
    $sql = "INSERT INTO palpiteiro values (NULL, '$email', '$usuario','$senha')";
    $query = mysqli_query($mysqli, $sql);
    
    if($query){?>
        <script type="text/javascript">
                Swal.fire({
                    title: 'Ops!',
                    text: 'Algo deu errado',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Bem-vindo(a)!',
                            text: 'Voce será direcionado para fazer o login',
                            icon: 'sucess',
                            confirmButtonText: 'Ok'
                        })
                        location.href = "../login.php";
                    }
                })
        </script>
    <?php }else{ ?>
        <script type="text/javascript">
        Swal.fire({
            title: 'Ops!',
            text: 'Erro no banco de dados',
            icon: 'error',
            confirmButtonText: 'Ok'
        })
    </script>;
    <?php }
}
?>