<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css"href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <h1>Formulário</h1>
        <p>Complete seus dados</p>
        <br>
    </div>
    <form method="POST" action="envio.php">
    

        <fieldset>
            <div>
                <label>Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="email">
            </div>
        </fieldset>
        <button  style="background-color: rgb(255, 110, 110); color: rgb(255, 129, 10)" type="submit">Enviar</button>
    </form>
</body>
</html>