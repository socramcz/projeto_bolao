<?php
session_start();
$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Bolao</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>


</head>

<section class="vh-100" id="imgLogin">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100" id="teste4">
            <div class="col col-lg-7" id="cardTotal">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0" id="cardLogin">
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form  class="user" method="post" action="_scripts/autenticar.php">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fa-regular fa-futbol fa-2x" style="padding-right: 1rem; color:#393f81;"></i>
                                        <span class="h1 fw-bold mb-0" style="color:#393f81;">BOLÃO 2022</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre na sua conta</h5>

                                    <div class="form-outline mb-4 form-group">
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form2Example17">Digite seu email</label>
                                    </div>

                                    <div class="form-outline mb-4 form-group">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form2Example27">Digite sua senha</label>
                                    </div>

                                    <button class="btn btn-dark btn-lg btn-block" style="margin-bottom: 2rem;">Login</button>

                                    <p class="mb-4 pb-lg-2">Não tem conta?
                                        <a href=" cadastro.php" style="color: #393f81;">Cadastre-se</a>
                                    </p>
                                    <a href="#" class="small text-muted">DEV´s FS-DUCK</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>