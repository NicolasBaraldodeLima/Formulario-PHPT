<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>

</head>
<body>
    
<header>

<h1> Resultado do processamento</h1>

</header>

<main>
    <?php 
    
     $n = $_GET["nome"] ?? "Sem nome"; // Variável ($_GET) Superglobal para adquirir os dados que o usuário colocou no formulário

     $s = $_GET["sobrenome"] ?? "Desconhecido"; // O sinal "??" é operador de qualescência nula 

     echo "<p> É um prazer te conhecer, <strong> $n $s! </strong> Este é o meu site.<br></p>";
    ?>
    <a href="javascript:history-go(-1)">Voltar para a página anterior</a>
</main>
</body>
</html>