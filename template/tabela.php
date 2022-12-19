<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Jogos da Copa do Mundo FIFA 2022 no Catar
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Dia</th>
                    <th>Horário</th>
                    <th>Mandante</th>
                    <th>Placar</th>
                    <th></th>
                    <th>Placar</th>
                    <th>Visitante</th>
                    <th>Estádio</th>
                    <th>Fase</th>
                    <th>Rodada</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "_scripts/config.php";
                $sql = "SELECT * FROM jogos";
                $query = mysqli_query($mysqli, $sql);
                while($dados = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $dados['dia']?></td>
                    <td><?php echo $dados['horario']?></td>
                    <td><img src="images/<?php echo $dados['timea'];?>.png" height="60" width="60"><?php echo $dados['timea']?></td>
                    <td><?php echo $dados['r1']?></td>
                    <td>X</td>
                    <td><?php echo $dados['r2']?></td>
                    <td><img src="images/<?php echo $dados['timeb'];?>.png" height="60" width="60"><?php echo $dados['timeb']?></td>
                    <td><?php echo $dados['localidade']?></td>
                    <td><?php echo $dados['tipo']?></td>
                    <td><?php echo $dados['rodada']?></td>
                    <td><?php echo $dados['situacao']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>