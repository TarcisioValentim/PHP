<?php
$mensagem = "";

if ($_POST) {

    $preco = $_POST['preco'];
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    $preco = (doubleval($preco));

    $substituir = array(',', '.');
    $substituidos = array('', '');
    $precoFormatado = str_replace($substituir, $substituidos, $preco);

    if (is_numeric($precoFormatado) && is_numeric($distancia) && is_numeric($autonomia)) {
        if ($distancia > 0 && $autonomia > 0) {

            $calculo = ($distancia / $autonomia) * ($precoFormatado);
            $calculo = number_format($calculo, 2, ',', '.');

            $mensagem .= "<div class='sucesso>";
            $mensagem .= "O valor total gasto séra de: ";
            $mensagem .= "<ul>";
            $mensagem .= "<p>O calculo do consumo é R$" . $calculo . "</p>";
            $mensagem .= "</ul>";
            $mensagem .= "</div>";
        } else {
            $mensagem .= "<div class='erro'>";
            $mensagem .= "<p>O valor da distancia e da autonomia deve ser maior que zero!.</p>";
            $mensagem .= "</div>";
        }
    } else {
        $mensagem .= "<div class='erro'>";
        $mensagem .= "<p>O valor recebido nao é numerico!";
        $mensagem .= "</div>";
    }
} else {
    $mensagem .= "<div class='erro'>";
    $mensagem .= "<p>Nenhum dado foi inserido</p>";
    $mensagem .= "</div>";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Consumo de Combustivel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>Resultado do calculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>

</html>