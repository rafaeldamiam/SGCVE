<form action="" method="POST">
    Tipo de Item: <input type="text" name="tp_item" value="<?=@$produto['tp_item']?>">
    Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>">
    Estoque: <input type="number" name="estoque" value="<?=@$produto['estoque']?>">
    Preço: <input type="number" name="preco" value="<?=@$produto['preco']?>">
    <button type="submit">Enviar</button>
</form>