<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Document</title>
        </head>
        <body>
            <form method='post' action='home.html'>
                change you background color <input type='text' name='backColor'>
                change you sideBar color <input type='text' name='sideColor'>
                <input type='submit' value='Change'>
            </form>
            <?php

                if($_POST) {

                    $sideColor = $_POST['sideColor'];
                    $backColor = '#045071';
            
                }
            ?>
        </body>
</html>
              
                