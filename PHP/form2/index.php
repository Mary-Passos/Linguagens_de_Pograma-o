<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calculadora.php" method="post">
        <fieldset>
            <legend><strong>Escolha dois números. <strong>
                        <legend>
                            <div>
                                <label for="num1">Primeiro número:</label>
                                <input type="number" id="num1" name="num1" value=""/>
                            </div>
                            
                            <div>
                                <label for="num2">Segundo número: </label>
                                <input type="number" id="num2" name="num2" value=""/>
                            </div>

                             <div>
                                <label for="operador">Operador: </label>
                                <input type="text" id="operador" name="operador" value=""/>
                            </div>

                            <div>
                                <button type="submit" name="sum">Enviar</button>
                            </div>
        </fieldset>
    </form>
    <div>

    </div>
</body>

</html>