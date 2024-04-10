<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento de Encomendas</title>
    <link rel="stylesheet" href="style/styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <h1>Rastreamento de Encomendas</h1>
        <form id="tracking-form">
            <label for="tracking-code">Código de Rastreio:</label>
            <input type="text" id="tracking-code" name="tracking-code" placeholder="AA123456785BR" required>
            <div class="g-recaptcha" data-sitekey="CHAVE RECAPTCHA"></div>
            <button type="submit">Pesquisar</button>
        </form>
        <div id="results"></div>
        <div id="error-message"></div>
    </div>

    <script src="script/script.js"></script>
</body>
</html>
