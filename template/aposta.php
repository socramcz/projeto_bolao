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
            <tbody>
                <?php
                include "_scripts/config.php";
                $sql = "SELECT * FROM jogos";
                $query = mysqli_query($mysqli, $sql);
                $i = 1;
                $j = 2;
                while($dados = $query->fetch_array()){
                ?>
                <tr>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Dia']?></td>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Horario']?></td>
                    <td style="text-align: center; vertical-align: middle"><img src="images/<?php echo $dados['Time1'];?>.png" height="60" width="60"></td>
                    <td style="text-align: center; vertical-align: middle; width: 210px">
                        <div class="d-flex align-items-center" style="text-align: center; vertical-align: middle; padding: 0px 12px 0px 0px">
                            <div class="ms-3">
                                <input type="text" placeholder="<?php echo $dados['Time1']?>" class="form-control" name="cp<?php echo $i; ?>" style="text-align: center"> 
                            </div> <hr>
                            <div class="ms-3"><h4>X</h4></div>
                            <div class="ms-3">
                                <input type="text" placeholder="<?php echo $dados['Time2']?>" class="form-control" name="cp<?php echo $j; ?>"  style="text-align: center">
                            </div>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle"><img src="images/<?php echo $dados['Time2'];?>.png" height="60" width="60"></td>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Localidade']?></td>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Tipo']?></td>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Rodada']?></td>
                    <td style="text-align: center; vertical-align: middle"><?php echo $dados['Situacao']?></td>
                </tr>
                <?php $i++;$j++;} ?>
            </tbody>
        </table>
    </div>
</div>