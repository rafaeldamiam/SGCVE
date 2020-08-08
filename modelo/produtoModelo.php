<?php

function pegarTodosProdutos() {
    $cnx = conn();
    $sql = "SELECT * FROM produto";
    $resultado = $cnx->query($sql);
    $produtos = array();
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$produtos[] = $col;
	}
    return $produtos;
}

function pegarprodutoPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM produto WHERE id_prod = $id";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$produto = $col;
	}
    return $produto;
}

function adicionarproduto($nome, $email, $senha) {
    $cnx = conn();
    $sql = "INSERT INTO produto(nome, email, senha) 
            VALUES ('$nome', '$email', '$senha')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'produto cadastrado com sucesso!';
}

function editarproduto($id, $nome, $email) {
    $cnx = conn();
    $sql = "UPDATE produto SET nome = '$nome', email = '$email' WHERE id_prod = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

function deletarproduto($id) {
    $cnx = conn();
    $sql = "DELETE FROM produto WHERE id_prod = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
        if($_SESSION["acesso"]["id"] == $id){
            redirecionar("login/logout");
        }
    return 'produto deletado com sucesso!';
            
}

function pegarprodutoPorEmailSenha($email, $senha) {
    $cnx = conn();
    $sql = "SELECT * FROM produto WHERE email = '$email' AND senha = '$senha'";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$produto = $col;
	}
    return $produto;
}