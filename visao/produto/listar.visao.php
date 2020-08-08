<h2>Listar Todos Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TIPO DO ITEM</th>
            <th>NOME</th>
            <th>ESTOQUE</th>
            <th>PREÇO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['id_prod']?></td>
        <td><?=$produto['tp_item']?></td>
        <td><?=$produto['nome']?></td>
        <td><?=$produto['estoque']?></td>
        <td><?=$produto['preco']?></td>
        <td><a href="./usuario/visualizar/<?=$produto['id_prod']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./usuario/editar/<?=$produto['id_prod']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$produto['id_prod']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo produto</a>

