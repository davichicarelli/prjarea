<?php
$base = filter_input(INPUT_GET, "base", FILTER_VALIDATE_FLOAT);
$altura = filter_input(INPUT_GET, "altura", FILTER_VALIDATE_FLOAT);

if ($base==false || $altura==false) {
$mensagem = "ERRO: Valores inválidos!!!";
} else {
    $area = $base * $altura/2;
    $mensagem = "<p> base=>" . $_GET["base"] . "</p>" .
                "<p> altura=>" . $_GET["altura"] . "</p>" .
                "O valor do perímetro é " .$area;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perímetro</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Resultado Área do Triângulo</h1>
    <div id="resultado">

     <?= $mensagem; ?> 

    </div>

</body>
</html>