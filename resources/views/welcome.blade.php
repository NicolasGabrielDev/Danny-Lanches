<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Danny Lanches</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito';
        }

        .container {
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 16px;
            width: 640px;
            height: 640px;
        }

        .title {
            align-self: center;
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
        }

        .text {
            font-family: 'Comfortaa', cursive;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class="title">Danny Lanches<br></p>
        <label class="text" for="nome">Nome:</label>
        <label class="text" for="telefone">Telefone:</label>
        <label class="text" for="pedido">Pedido:</label>
        <label class="text" for="observacoes">Observações:</label>
        <div>
            <label class="text" for="valor">Valor:</label>
            <label class="text" for="troco">Troco:</label>
        </div>
    </div>
</body>

</html>
