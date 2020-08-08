<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
    </thead>
        <tr>
            <td><?=$usuario['id_user']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
        </tr>
</table>
<td><a href="./usuario/editar/<?=$usuario['id_user']?>" class="btn btn-info">edit</a></td>
<td><a href="./usuario/deletar/<?=$usuario['id_user']?>" class="btn btn-danger">del</a></td>