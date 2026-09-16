<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend><strong>Upload de arquivos</strong></legend>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="arq">Inserir arquivo: </label>
                <input type="hidden" name="MAX_FIL_SIZE" value="50000"/>
                <input type="file" name="arquivo" /><br>
            </div>
            <button type="submit" value="Enviar arquivo">Enviar</button>
    </fieldset>
    </form>
</body>

</html>