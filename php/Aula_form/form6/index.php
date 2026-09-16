<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="dadoscadst.php" method="post">
        <legend><strong>Cadastre seus dados aqui: <strong> </legend>
        <div>
            <label for="nome">Nome </label>
            <input type="name" name="nome" id="nome" required />
            <div>
            </div>

            <div>
                <label for="email">Email </label>
                <input type="email" name="email" id="email" required/>
            </div>

            <div>
                <label for="cidade">Cidade</label>
            </div>

            <div>
                <select name="cidade" ><br>
                <option value="Recife">Recife</option>
                <option value="olinda">Olinda</option>
                <option value="Paulista">Paulista</option>
                <option value="Camaragibe">Camaragibe</option>
                <option value="Jaboatão">Jaboatão</option>
                </select>
            </div>


            <div>
                <button type="submit">Cadastrar</button>
            </div>
    </form>
</body>

</html>