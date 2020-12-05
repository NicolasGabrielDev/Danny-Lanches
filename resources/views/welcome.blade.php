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
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 72mm;
        }

        .title {
            align-self: center;
            font-family: 'Great Vibes', cursive;
            font-size: 28px;
            margin: 0;
        }

        .sub-title {
            align-items: center;
            font-family: 'Great Vibes', cursive;
            font-size: 20px;
            text-align: center;
            margin: 0;
            padding-bottom: 24px;
        }

        .text {
            font-family: 'Comfortaa', cursive;
        }

        .input {
            border: 0px solid black;
            font-family: 'Comfortaa', cursive;
        }

        .div-form {
            padding-bottom: 24px;
            padding-left: 12px;
        }
        .textarea {
            border: 0px;
            resize: vertical;
            width: 72mm;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class="title">Danny Lanches</p>
        <p class="sub-title">Deus em tudo... e muito carinho e<br> dedicação para você</p>
        <form class="form-column">
            <div class="div-form">
                <div>
                    <label class="text" for="nome">Cliente:</label>
                    <input class='input'>
                </div>
                <label class="text" for="endereco">Endereço:</label>
                <div>
                    <textarea rows="2" class="textarea"></textarea>
                </div>
                <div>
                    <label class="text" for="telefone">Telefone:</label>
                    <input class='input'>
                </div>
            </div>
            <div class="div-form">
                <label class="text" for="pedido">Pedido:</label>
                <div>
                    <textarea rows="5" class="textarea"></textarea>
                </div>
                <div>
                    <label class="text" for="observacoes">Obs   :</label>
                    <input class="input">
                </div>
            </div>
            <div class="div-form">
                <div>
                    <label class="text" for="total">Total:</label>
                    <input class="input">
                </div>
                <div>
                    <label class="text" for="troco">Troco:</label>
                    <input class="input">
                </div>
            </div>
        </form>
    </div>
</body>

</html>