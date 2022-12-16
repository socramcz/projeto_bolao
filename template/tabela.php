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
                    <td><?php echo $dados['Dia']?></td>
                    <td><?php echo $dados['Horario']?></td>
                    <td><img src="images/<?php echo $dados['Time1'];?>.png" height="60" width="60"><?php echo $dados['Time1']?></td>
                    <td><?php echo $dados['R1']?></td>
                    <td>X</td>
                    <td><?php echo $dados['R2']?></td>
                    <td><img src="images/<?php echo $dados['Time2'];?>.png" height="60" width="60"><?php echo $dados['Time2']?></td>
                    <td><?php echo $dados['Localidade']?></td>
                    <td><?php echo $dados['Tipo']?></td>
                    <td><?php echo $dados['Rodada']?></td>
                    <td><?php echo $dados['Situacao']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>