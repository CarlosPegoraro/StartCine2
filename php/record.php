<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>StartCine - SingUp</title>
        <link rel="stylesheet" href="css/record.css">
        <link rel="icon" type="imagem/png" href="../img/iconCine.png" />
    </head>
    <body>
        <p class="tittle">Sing Up</p>
        <form method="POST" action="./background/backRecord.php">
            <div class="centralize">
                <p class="datas">
                    <input type="text" name="name">: Name  <br>
                    <br>
                    <input type="email" name="email" placeholder="Email ou telefone">: Email  <br>
                    <br>
                    <input type="password" name="pass1">: Password  <br>
                    <br>
                    <input type="password" name="pass2">: Repeat password  <br>
                </p>
            </div>
            <input type="submit" class="button" value="Register"> <br>
            <br>
            <a href="login.php">Back to Login</a>
        </form>
    </body>
</html>