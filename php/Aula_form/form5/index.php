<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <legend><strong>Calcule sua nota.</strong></legend>
    <form action="notas.php" method="post">
        <div>
            <label for="not1">Primeria nota: </label>
            <input type="number" name="nota1" id="nota1" min="0" max="10" />
        </div>

        <div>
            <label for="nota2">Segunda nota: </label>
            <input type="number" name="nota2" id="nota2" min="0" max="10" />
        </div>
        <div>
            <button type="submit">Calcular</button>
        </div>
    </form>
</body>

</html>