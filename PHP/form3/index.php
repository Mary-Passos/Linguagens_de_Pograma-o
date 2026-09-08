<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <fieldset>
        <form action="media.php" method="post">

            <legend>Informe sua notas:</legend>
            <div>
                <label for="nota1">Nota 1</label>
                <input type="number" name="nota1" id="nota1" min="0" max="10"/><br>
            </div>

            <div>

            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" id="nota2" min="0" max="10"/>
            </div>

        <button type="submit">Calcular</button><br>
        </form>
    </div>
</body>

</html>