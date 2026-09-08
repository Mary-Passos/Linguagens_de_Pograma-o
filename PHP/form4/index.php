<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldstet>
        <legend>Cadastro de Usuário</legend>
    <form action="cadastrdados.php" method="$_POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text " name="nome" id="nome" /><br>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" /><br>
        </div>

        <div>
            <label for="cidade">Cidade</label><br>
            <select name="cidade">
                <option value="cidade">Recife</option>
                <option value="cidade">Camaragibe</option>
                <option value="cidade">Jaboatão</option>
                <option value="cidade">Cabo</option>
                <option value="cidade">Olinda</option>
                <option value="cidade">Paulista</option>
            </select>
        </div>
    </form>
</fildset>
</body>

</html>