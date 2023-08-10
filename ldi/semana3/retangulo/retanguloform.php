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
                <label for="altura">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            
        </form>
        <?php
        include 'Retangulo.php';

//isset verifica de esta setado, se tem alguma informação
        // if (isset ($_POST["marca"]) && isset ($_POST["modelo"]) && isset ($_POST["ano"])) ou o que foi usado, que é o SERVER

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST["altura"];
            $largura = $_POST["largura"];

            $retangulo = new Retangulo($altura, $largura);

            echo"<h3>Dados enviados</h3>";
            echo"<p><strong>Altura:</strong> " . $retangulo->get_altura() . "</p>";
            echo"<p><strong>Largura:</strong> " . $retangulo->get_largura() . "</p>";

            echo"<p><strong>Calcular área:</strong> " . $retangulo->calcular_area() . "</p>";
            echo"<p><strong>Calcular perímetro:</strong> " . $retangulo->calcular_perimetro() . "</p>";
        }


        
        ?>
</div>
</body>
</html>

<!-- Como podemos ver, o método do formulário é o Post, então, quando a fente for fazer o Request Method, devemos dizer que o método é o post -->
