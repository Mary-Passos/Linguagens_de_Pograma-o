<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="post">
        <fieldset>
            <h2>Formulario teste.</h2>
            <lgends><strong>Cadastre seus dados aqui:</strong></legends>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" required /><br>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" required /><br>
                </div>

                <div>
                    <label for="idade">Idade</label>
                    <input type="number" id="idade" name="idade" min="8" max="99" required />
                </div>


                <div>
                    <label for="sexo">Sexo</label>
                </div>

                <div>
                    <label for="homem">homem</label>
                    <input type="radio" id="homem" name="sexo" value="homem" required />


                    <label for="mulher">mulher</label>
                    <input type="radio" id="mulher" name="sexo" value="mulher" required />


                    <label for="outros">outro</label>
                    <input type="radio" id="outros" name="sexo" value="outros" required />


                </div>


                <div>
                    <label for="cidade">Cidade</label>
                    <select name="cidade" required>
                    <option value="Recife">Recife</option>
                    <option value="Olinda">Olinda</option>
                    <option value="Camaragibe">Camaragibe</option>
                    <option value="Jaboatão">Jaboatão</option>

                    </select>
                </div>

                <div>
                    <button type="submit">Cadastrar</button>
                </div>
        </fieldset>
    </form>
</body>

</html>