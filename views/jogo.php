<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Meus Jogos</title>
</head>
<body>
    <h1>Meus Jogos</h1>

    <ul>
        <li><?php echo "Jogo: ".$jogo->getNome(); ?></li>
        <li><?php echo "Preço: ".$jogo->getPreco(); ?></li>
        <li><?php echo "Categoria: ".$jogo->getCategoria(); ?></li>
    </ul>
    </body>
</html>