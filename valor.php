<?php
$realNumber = $_GET["realNumber"];
$parteInteira = intval($realNumber);
$parteFracionaria = ($realNumber - $parteInteira);
$realNumber = number_format($realNumber, 3, ',', '.');
$parteInteira = number_format($parteInteira, 0, ',', '.');
$parteFracionaria = number_format($parteFracionaria, 3, ',', '.');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloForm.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Analisador de Número real</h1>
    </header>
    <main>
        <?php
        echo "<p>Analisando o número <b>$realNumber</b> informado pelo usuário: </p><br>";
        echo "<p>A parte inteira do numero é $parteInteira</p>" . "<br>";
        echo "<p>A parte fracionária do numero é $parteFracionaria</p>" . "<br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>