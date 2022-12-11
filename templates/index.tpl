<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
</head>
<body>
    <h1>{$titulo}</h1>

    <h2>{$mensagem}</h2>

    <h3>Arrays</h3>

    <ul>
    {foreach $frutas as $fruta}
        <li>{$fruta}</li>
    {/foreach}
    </ul>

    <ul>
    {foreach $atletas as $atleta}
        <li>{$atleta.nome} - {$atleta.esporte}</li>
    {/foreach}
    </ul>

    <h3>Object</h3>

    <p>{$jogador->nome} - {$jogador->idade}</p>

    <h3>acessando informacoes GET, POST, SESSION, COOKIES</h3>
    <p>{$smarty.get.nome}</p>
    <p>{$smarty.session.logado}</p>

</body>
</html>