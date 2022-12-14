<?php include "header.php"; ?>

<div class="sb-nav-fixed">

    <?php include "topbar.php"; ?>

    <div id="layoutSidenav">

        <?php include "barraLateral.php"; ?>

        <div id="layoutSidenav_content">

            <div class="container-fluid px-4" id="ConteudoPrincipal">
                <h1 class="mt-4">Seja bem-vindo(a)!</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Faça sua aposta </li>
                </ol>

                <?php include "cards.php"; ?>

                <?php include "template/tabela.php"; ?>
                
            </div>

            <?php include "footer.php"; ?>

        </div>
    </div>

    <?php include "js.php"; ?>
    
</div>