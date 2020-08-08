<h2>Listar usuários todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>VIEW</th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['nome']?></td>
        <td><a href="./usuario/visualizar/<?=$usuario['id_user']?>" class="btn btn-secondary">view</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

