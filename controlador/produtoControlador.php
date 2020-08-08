<?php

require_once "modelo/produtoModelo.php";

/** user, admin */
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/** user, admin */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        alert(adicionarproduto($nome, $email, $senha));
        redirecionar("produto");
    } else {
        exibir("produto/formulario");
    }
}

/** user, admin */
function deletar($id) {
    alert(deletarproduto($id));
    redirecionar("produto/index");
}

/** user, admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarproduto($id, $nome, $email));
        redirecionar("produto/index");
    } else {
        $dados["produto"] = pegarprodutoPorId($id);
        exibir("produto/formulario", $dados);
    }
}

/** user, admin */
function visualizar($id) {
    $dados["produto"] = pegarprodutoPorId($id);
    exibir("produto/visualizar", $dados);
}
