<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com For - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">
        <h1>Exemplo com While</h1>
        <br>
        <form action="" method="post">
            <hr>
            <?php
            $mostrarFormulario = true; 

            if (isset($_POST["bt_continuar"])) {
                $nome = $_POST["bt_nome"];
                $continuar = $_POST["bt_continuar"];
                echo ("Nome recebido foi: $nome <br>");

                if ($continuar == "Não") {
                    $mostrarFormulario = false;
                }
                
            }

            if ($mostrarFormulario) {
            ?>
                <div class="mb-3">
                    <label>Digite
                        <label>Digite o seu nome</label>
                        <input type="text" name="bt_nome">
                </div>
                <div class="mb-3">
                    <label>Deseja continuar?</label>
                    <select name="bt_continuar">
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>
                <input type="submit">
            <?php
            } else {
                echo "Formulário finalizado.";
            }
            ?>
        </form>
    </div>
</body>

</html>