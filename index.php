<?php include "header.php"; ?>

<div class="sb-nav-fixed">

    <?php include "topbar.php"; ?>

    <div id="layoutSidenav">
        
        <?php include "barraLateral.php"; ?>

        <div id="layoutSidenav_content">

            <?php if(!isset($_GET['r'])){
                include "template/index.php";
                }else{                        
                    switch ($_GET['r']){
                        case 'inicio':
                        include "template/index.php";
                        include "cards.php";
                        include "template/tabela.php";
                        break;

                        case 'aposta':
                            include "template/aposta.php";
                            break;

                        default:
                        include "template/index.php";
                        include "cards.php";
                        include "template/tabela.php";
                    }   
                }
            ?> 
        </div> 
    </div>

    <?php include "js.php"; ?>
    
</div>