<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>StartCine - Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="icon" type="imagem/png" href="../img/iconCine.png" />
    </head>
    <body>
        <p class="tittle">Log In</p>
        <form method="POST" action="background/backLogin.php">
            <div>
                <p class="datas">
                    Email: <input type="text" name="email" placeholder="Email"> <br>
                    <br>
                    Password: <input type="password" name="pass">
                </p>
            </div>
            <input type="submit" class="button" value="Connect">
        </form>
        <p class="singup">Sing up <a href="record.php">now and enjoy!</a> It's free!</p>
        <a href="../index.html">Back to home</a>
    </body> 
</html>