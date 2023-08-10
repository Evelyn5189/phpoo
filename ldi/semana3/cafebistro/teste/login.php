<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário e Classe Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="number" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            
        </form>
        <?php
        include 'Usuario.php';

//isset verifica de esta setado, se tem alguma informação
        // if (isset ($_POST["marca"]) && isset ($_POST["modelo"]) && isset ($_POST["ano"])) ou o que foi usado, que é o SERVER

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $nome = $_POST["nome"];

            $usuario = new Usuario($email, $senha, $nome);

            echo"<h3>Dados enviados</h3>";
            echo"<p><strong>E-mail:</strong> " . $usuario->get_email() . "</p>";
            echo"<p><strong>Senha:</strong> " . $usuario->get_senha() . "</p>";
            echo"<p><strong>Nome:</strong> " . $usuario->get_nome() . "</p>";
        }


        
        ?>
</div>
</body>
</html>

<!-- Como podemos ver, o método do formulário é o Post, então, quando a fente for fazer o Request Method, devemos dizer que o método é o post -->
