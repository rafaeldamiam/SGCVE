<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<center>
    <nav>
      <ul>
        <li><a href="./">Principal</a></li>
        <li><a href="usuario">Usuarios</a></li>
        <li><a href="produto">Produtos</a></li>
        <li><a href="venda">Vendas</a></li>
        <li><a href="paginas/sobre">Sobre</a></li>
        <?php if (isset($_SESSION["acesso"])) :?>
          <li><a href="login/logout">Desconectar</a></li>
        <?php endif;?>
      </ul>
    </nav>
    <hr>