<!DOCTYPE html>
<<<<<<< HEAD
<html lang="br-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de consumo de combustivel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>Intrucoes</h2>
            <div>
                <p>Esta aplicacao tem como finalidade demostrar os calores
                    que serao gastos com combustivel durante uma viagem, com base
                    no cosumo do seu veiculo, e com a distancia determinada por voce!
                </p>
                <p>Os combustiveis disponiveis para este calculo estao abaixo: </p>
                <ul>
                    <li><b>Alcool</b></li>
                    <li><b>Diesel</b></li>
                    <li><b>Gasolina</b></li>
                </ul>
            </div>
        </div>

        <div class="painel">
            <h2>Calculo do valor (R$) do consumo</h2>

            <div class="conteudo-painel">
                <form action="calculo.php" method="POST">

                    <label for="preco">Qual valor combustivel de hoje?</label>
                    <input type="floatval" name="preco" />
                    <label for="distancia">Distancia em kilometros a ser percorrida</label>
                    <input type="number" name="distancia" require_once />
                    <label for="autonomia">Consumo de combustivel do veiculo (km/l)</label>
                    <input type="number" name="autonomia" require_once />

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>
    </main>

</body>

</html>
=======
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="jumbotron">
<h2>Upload CSV</h2>
  <form action="importar.php" method="post" enctype="multipart/form-data">
  
    <div class="checkbox">
      <label><input type="file" name="file"> </label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
  </div>
</div>

</body>
</html>
>>>>>>> 649a27c969ffbad5eca390e5d855285b20a890ab
