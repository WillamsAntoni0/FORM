
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Idade</title>
    <link rel="stylesheet" href="form2.css">
</head>
<body>
    <div class="container">
        <h2>Informe seus dados</h2>
        <form method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br><br>

            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $idade = intval($_POST["idade"]);

            if ($idade >= 18) {
                echo "<p class='mensagem positivo'>Bem-vindo $nome, acesso permitido!</p>";
            } else {
                echo "<p class='mensagem negativo'>Desculpe $nome, acesso negado!</p>";
            }
        }
        ?>
    </div>
</body>
</html>