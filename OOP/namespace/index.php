<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespaces</title>
</head>
<body>
    <?php

        use Cliente\Cadastro;  // usar a classe cadastro que está dentro do diretório Cliente
        require_once('config.php');

        $cliente = new Cadastro();

        $cliente->setNome('Josevaldo dos Santos');
        $cliente->setSenha('123456789');
        $cliente->setEmail('josevaldo1979_santos@sla.com');
        echo $cliente->registrarPedido();
        echo '<br/>';
        echo $cliente;
    ?>
</body>
</html>