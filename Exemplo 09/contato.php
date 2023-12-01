    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de Contato</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>
        <div class="container text-center">
            <h1>Tela de Contato</h1>
            <br>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="">Nome:</label>
                    <input type="text" name="bt_nome" id="">
                </div>
                <div class="mb-3">
                    <label for="">Telefone:</label>
                    <input type="text" name="bt_telefone" id="">
                </div>
                <div class="mb-3">
                    <label for="">Telefone:</label><br>
                    <textarea name="bt_telefone" id="" cols="30" rows="10"></textarea>
                </div>
                <hr>
                <input class="btn btn-success" type="submit">
                <input class="btn btn-warning" type="reset" value="Limpar">
                <a class="btn btn-danger"href="#">Cancelar</a>                
                <hr>               
            </form>
        </div>
    </body>

    </html>