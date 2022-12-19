<?php
session_start();


?>
<html>

<body>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    
    include "config.php";
    
    date_default_timezone_set('America/Sao_Paulo');
    $login = '';
    $data = date("Y-m-d H:i:s");
    $rodada = $_POST['rodada'];
       
    //Dados do Primeiro Jogo
    
    if(!empty($_POST['jogo']) && !empty($_POST['timea'] && !empty($_POST['timeb'] ) ))
    $jogo = $_POST['jogo'.$a];
    $timea = $_POST['timea'.$i];
    $timeb = $_POST['timeb'.$j];
    $sql = "INSERT INTO aposta (JogosId, t1,t2, login,data,tipo) VALUES ('$jogo','$timea','$timeb','$login','$data','$rodada')";
    $query=mysqli_query($mysqli, $sql);
    
    
    
    
    if($query){?>
        <script type="text/javascript">
            Swal.fire({
                title:'Salvo',
                text:'Aposta feita com Sucesso',
                icon:'success',
                confirmButtonText:'Ok'
            }).then((result)=>{
                if(result.isConfirmed){
                    location.href="../index.php";
                }
            })
    
        </script>
    <?php }else{ ?>
    <script type="text/javascript">
            swal("Erro");
        </script>
        
    <?php  }
    
    ?>
    
    </body>

    </html>
