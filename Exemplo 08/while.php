<?php
 

?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo com While - PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body>        
        <div class="container text-center">
            <h1>Exemplo com While</h1>
            <br>
            <form action="" method="post">
                <hr>
                <?php
                    $confirmacao = true; // Inicializa como true para mostrar o formulário inicialmente
                    if(isset($_POST["bt_continuar"])) {
                        $nome = $_POST["bt_nome"];
                        $continuar = $_POST["bt_continuar"];
                        echo("Nome recebido foi: $nome <br>");

                        if($continuar == "Não") {
                            $confirmacao = false;
                        }
                    }
                    $confirmacao = false;
                    while ($confirmacao) {
                ?>
                <div class="mb-3">
                    <label>Digite o seu nome</label>
                    <input type="text" name="bt_nome">
                </div>
                <div class="mb-3">
                    <label>Deseja continuar</label>
                    <input type="text" name="bt_continuar" placeholder="Sim/Não">
                </div>
                <input type="submit">
                <?php
                    } 
                ?>
            </form>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>