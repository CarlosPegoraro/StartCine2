<?php

    //Call the outhets arquives
    use StartCine\Record;

    require_once '../connect.php';
    require_once './functionSQL/Record.php';
    require_once './class/Record.php';
    require_once '../model.php';

    //Call the connect function
    $conn = connect();

    //Check the datas sent by form in arquive record
    if($_POST)
    {
        //Receive the datas sent by form in arquive record
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if(strpos($email, ".com") == false) {
            echo "<p class='datas'> Error </p>";
        }

        //Create the var using the class Record
        $record = new Record($name, $email, $pass1);

        //The sql code from insert datas
        $sql = "INSERT INTO users (NAME, EMAIL, PASS) VALUES (?,?,?);";

        //Function for show the datas from data base
        statusRecord($record);

        //check if password 1 is some password 2
        if($pass1 == $pass2)
        {
            $registered = makeRecord($conn, $sql, $name, $email, $pass1);

            if($registered)
            {
                echo "<p>Não foi possivel registrar!</p>";
            } else
            {
                $titulo   = "StartCine - $email"; // normalmente vai pegar de DB ou formulario
                $conteudo = $body;

                // Montamos nosso HTML no PHP, da forma que quisermos
                // \t é o tab, \n a quebra de linha
                $html  = "<html>\n";
                $html .= "\t<head>\n" . htmlentities( $head );
                $html .= "\t\t<title>".htmlentities( $titulo )."</title>\n";
                $html .= "\t</head>\n";
                $html .= "\t<body>\n";
                $html .= "\t\t<div>".htmlentities( $conteudo )."</div>\n";
                $html .= "\t</body>\n";
                $html .= "</html>\n";

                //... e vai montando o arquivo com variáveis etc
                // e depois salva

                file_put_contents("../users/$email.html", $html);
                header('Location: ../login.php');
                die();
            }
        }
    }
?>