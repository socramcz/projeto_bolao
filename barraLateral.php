<?php 

session_start();
include "header.php";
include_once('_scripts/config.php');

$user = $_SESSION['email'];

?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Pagina Principal</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-futbol" style="color: green;"></i></div>
                    Bolão
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="?r=aposta#">Apostar</a>
                        <a class="nav-link " href="/template/tabela.php" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Tabela
                            <div class="sb-sidenav-collapse-arrow"><i></i></div>
                        </a>

                        <a class="nav-link" href="#">Resultados</a>
                    </nav>
                </div>


                <div class="sb-sidenav-menu-heading">OUTRAS OPÇÕES</div>
               <a class="nav-link" href="./_scripts/sair.php">
                    <div  class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"
                            style="color: green;"></i></i></div>
                    Sair
                    
                </a>
                <a class="nav-link" href="https://github.com/socramcz/projeto_bolao">
                    <div class="sb-nav-link-icon"><i class="fa fa-globe" aria-hidden="true" style="color: green;"></i>
                    </div>
                    Acesse GitHub
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logado como:</div>
            <?php echo $user ?>
        </div>
    </nav>
</div>