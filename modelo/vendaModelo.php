<?php

function pegarTodasVendas() {
    $cnx = conn();
    $sql = "SELECT * FROM venda";
    $resultado = $cnx->query($sql);
    $vendas = array();
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$vendas[] = $col;
	}
    return $vendas;
}

function pegarUsuarioPorId($id) {
    $cnx = conn();
    $sql = "SELECT * FROM venda WHERE id_venda = '$id'";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$usuario = $col;
	}
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha) {
    $cnx = conn();
    $sql = "INSERT INTO venda(nome, email, senha) 
            VALUES ('$nome', '$email', '$senha')";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao cadastrar usuário'); }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email) {
    $cnx = conn();
    $sql = "UPDATE venda SET nome = '$nome', email = '$email' WHERE id = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao alterar usuário'); }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $cnx = conn();
    $sql = "DELETE FROM venda WHERE id_venda = $id";
    $resultado = $cnx->query($sql);
    if(!$resultado) { die('Erro ao deletar usuário'); }
        if($_SESSION["acesso"]["id"] == $id){
            redirecionar("login/logout");
        }
    return 'Usuario deletado com sucesso!';
            
}

function pegarUsuarioPorEmailSenha($email, $senha) {
    $cnx = conn();
    $sql = "SELECT * FROM venda WHERE email = '$email' AND senha = '$senha'";
    $resultado = $cnx->query($sql);
    while ($col = $resultado->fetchArray(SQLITE3_ASSOC)) {
		$usuario = $col;
	}
    return $usuario;
}