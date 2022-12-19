<link rel="stylesheet" href="style.css">

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Jogos da Copa do Mundo FIFA 2022 no Catar
    </div>

    <div class="card-body">
        <table class="table table-sm" id="datatablesSimple">
            <thead>
                <tr>
                    <th style="text-align: center; vertical-align: middle">Dia</th>
                    <th style="text-align: center; vertical-align: middle">Horário</th>
                    <th style="text-align: center; vertical-align: middle">Mandante</th>
                    <th style="text-align: center; vertical-align: middle">Placar</th>
                    <th style="text-align: center; vertical-align: middle">Visitante</th>
                    <th style="text-align: center; vertical-align: middle">Estádio</th>
                    <th style="text-align: center; vertical-align: middle">Fase</th>
                    <th style="text-align: center; vertical-align: middle">Rodada</th>
                    <th style="text-align: center; vertical-align: middle">Situação</th>
                </tr>
            </thead>
            <form action="_scripts/aposta.php">
                <tbody>
                    <?php
                    include "_scripts/config.php";
                    $sql = "SELECT * FROM jogos WHERE situacao = 'ABERTO'";
                    $query = $mysqli->query($sql);
                    $i = 1;
                    $j = 1;
                    $a = 1;
                    while ($dados = $query->fetch_array()) {
                    ?>
                    <input type="hidden" name="jogo<?php echo $a; ?>" value="<?php echo $dados['Id']; ?>">
                   
                    <tr>
                        <td name='dia' style="text-align: center; vertical-align: middle"><?php echo $dados['dia'] ?>
                        </td>
                        <td style="text-align: center; vertical-align: middle"><?php echo $dados['horario'] ?></td>
                        <td style="text-align: center; vertical-align: middle"><img
                                src="images/<?php echo $dados['timea']; ?>.png" height="60" width="60"></td>
                        <td style="text-align: center; vertical-align: middle; width: 210px">
                            <div class="d-flex align-items-center"
                                style="text-align: center; vertical-align: middle; padding: 0px 12px 0px 0px">
                                <div class="ms-3">
                                    <input type="text" placeholder="<?php echo $dados['timea'] ?>" class="form-control"
                                        name="timea<?php echo $i; ?>" style="text-align: center">
                                </div>
                                <hr>
                                <div class="ms-3">
                                    <h4>X</h4>
                                </div>
                                <div class="ms-3">
                                    <input type="text" placeholder="<?php echo $dados['timeb'] ?>" class="form-control"
                                        name="timeb<?php echo $j; ?>" style="text-align: center">
                                </div>
                            </div>
                        </td>
                        <td style="text-align: center; vertical-align: middle"><img
                                src="images/<?php echo $dados['timeb']; ?>.png" height="60" width="60"></td>
                        <td style="text-align: center; vertical-align: middle"><?php echo $dados['localidade'] ?></td>
                        <td style="text-align: center; vertical-align: middle"><?php echo $dados['tipo'] ?></td>
                        <td name='rodada' style="text-align: center; vertical-align: middle">
                            <?php echo $dados['rodada'] ?></td>
                        <td style="text-align: center; vertical-align: middle"><?php echo $dados['situacao'] ?></td>
                    </tr>
                    <?php $i++; $j++; $a++;;
                    } ?>
                </tbody>
                <div>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </td>
                    </tr>
                </div>
            </form>
        </table>
    </div>
</div>