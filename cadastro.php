<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cadastro - Bolao</title>
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    

</head>

<section class="vh-100" id="imgCadastro">
    <div class="container py-5 h-100" >
        <div class=" row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-7">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0 justify-content-center" id="cardCadastro">
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <form class="user" method="post" action="_scripts/cadastrar.php">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fa-solid fa-user-plus fa-2x" style="padding-right: 1rem; color:#393f81;"></i>
                                    <span class="h1 fw-bold mb-0" style="color:#393f81;">CADASTRO</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Seja bem-vindo</h5>

                                <div class="form-outline mb-4 form-group">
                                    <label class="form-label" for="form2Example17">Digite seu usuario</label>
                                    <input type="text" id="exampleInputEmail" class="form-control form-control-user" name="usuario" required />
                                </div>

                                <div class="form-outline mb-4 form-group">
                                    <label class="form-label" for="form2Example27">Digite seu email</label>
                                    <input type="email" id="exampleInputEmail" class="form-control form-control-user" name="email" required />
                                </div>

                                <div class="form-outline mb-4 form-group">
                                    <label class="form-label" for="form2Example27">Digite sua senha</label>
                                    <input type="password" id="exampleInputPassword" class="form-control form-control-user" name="senha" required />
                                </div>


                                <div class="pt-1 mb-4" style="padding-left: 7rem;">
                                    <button class="btn btn-dark btn-lg btn-block " type="submit">Cadastrar</button>
                                </div>

                                <p class="mb-5 pb-lg-2 text-center">Já possui conta?
                                    <a href="login.php" style="color: #393f81;">Faça login</a>
                                </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>