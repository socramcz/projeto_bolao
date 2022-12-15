<?php include "header.php"; ?>

<div class="sb-nav-fixed">

    <?php include "topbar.php"; ?>

    <div id="layoutSidenav">

        <?php include "barraLateral.php"; ?>

        // esse R vai ser uma variavel usada na propria barra de pesquisa ex: "http://localhost:81/projeto_bolao/index.php?r=inicio#"
        <?php if(!isset($_GET['r'])){
                            include "template/index.php";
                        }else{                        
                            switch ($_GET['r']){
                                case 'inicio':
                                include "template/index.php";
                                include "cards.php";
                                include "template/tabela.php";
                                break;

                                case 'Aposta':
                                    include "template/aposta.php";
                                    break;

                                default:
                                include "template/index.php";
                            }   
                        }
                    ?>

                
            </div>

            <?php include "footer.php"; ?>

        </div>
    </div>

    <?php include "js.php"; ?>
    
</div>