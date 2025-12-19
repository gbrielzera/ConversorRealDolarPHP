<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        $data_inicial = date("m-d-Y", strtotime("-7 days"));
        $data_final = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $data_inicial .'\'&@dataFinalCotacao=\''. $data_final .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor_inserido = $_POST["dinheiro"] ?? 0;
        $valor_calculado = $valor_inserido / $cotacao;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
        echo "<p>O valor inserido de " . numfmt_format_currency($padrao, $valor_inserido, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao, $valor_calculado, "USD") . "</strong></p>"
        ?>
    </main>
    
</body>
</html>