<?php
$nome = '';
$periodo = '';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? ''; 
    $periodo = $_POST['periodo'] ?? '';
    switch($periodo) {
        case 'm':
            $mensagem = "Bom dia $nome";
        break;
        case 't':
                $mensagem = "Boa tarde $nome";
        break;
        case 'n':
            $mensagem = "Boa noite $nome";
        break;

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Aplicação</title>
</head>
<body>
    <h1>
        <?php 
            if($periodo == 'm') {
                echo 'Bom dia <i>' . $nome . '</i>';
            } elseif($periodo == 't') {
                echo 'Boa tarde <i>' . $nome . '</i>';
            } elseif($periodo == 'n') {
                echo 'Boa noite <i>' . $nome . '</i>';
            }
        ?>
    </h1>
    
    <h1>
        <?php if($periodo == 'm'): ?>
            Bom dia <i><?= $nome ?></i>
        <?php elseif($periodo == 't'): ?>
            Boa Tarde <i><?= $nome ?></i>
        <?php elseif($periodo == 'n'): ?>
            Boa Noite <i><?= $nome ?></i>
        <?php endif ?>
    </h1>

    <h1><?= $mensagem ?></h1>

    
    <form action="/index.php" method="post">
        <label for="periodo">Selecione o Período</label>
        <select name="periodo" id="periodo">
            <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select>
        <br>

        <label for="nome">Digite seu nome</label>
        <input type="text" name="nome"/>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
