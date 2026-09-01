<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="post">
        <fieldset>
            <lgends>Cadastre seus dados aqui.</legends>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" /><br>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" /><br>
                </div>

                <div>
                    <label for="idade">Idade</label>
                    <input type="number" id="idade" name="idade" min="8" max="99" />
                </div>


                <div>
                    <label for="sexo">Sexo</label>
                </div>

                <div>
                    <label for="homem">homem</label>
                    <input type="checkbox" id="homem" name="homem" value="homem">


                    <label for="mulher">mulher</label>
                    <input type="checkbox" id="mulher" name="mulher" value="mulher" />


                    <label for="outros">outros</label>
                    <input type="checkbox" id="outros" name="outros" value="mulher">


                </div>


                <div>
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" />
                </div>


                <div>

                    <div>
                        <button type="submit">Cadastrar</button>
                    </div>
        </fieldset>
    </form>
</body>

</html>