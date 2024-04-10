<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Edição</title>
    <link rel="stylesheet" href="style/panel.css">
</head>
<body>
    <div id="edit-panel">
        <h2>Editar Formulário</h2>
        <form id="edit-form">
            <label for="inputH1FontSize">Tamanho da Fonte do Título (h1):</label>
            <input type="number" id="inputH1FontSize" min="12" max="36" value="24"><br><br>

            <label for="inputLabelFontSize">Tamanho da Fonte dos Labels:</label>
            <input type="number" id="inputLabelFontSize" min="12" max="24" value="16"><br><br>

            <label for="inputFont">Fonte:</label>
            <select id="inputFont">
                <option value="Arial">Arial</option>
            </select>
            <br><br>

            <label for="inputColor">Cor do Texto:</label>
            <input type="color" id="inputColor" value="#333"><br><br>

            <label for="inputButtonColor">Cor do Botão:</label>
            <input type="color" id="inputButtonColor" value="#007bff"><br><br>

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
    <script src="script/script.js"></script>
</body>
</html>
