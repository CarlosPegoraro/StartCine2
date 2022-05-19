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
                echo "<p>Can't save the data!</p>";
            } else
            {
                //Create the folder using the function is_dir and mkdir
                
                $path = "../users/$email";
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                


                $fpHtml = fopen("../users/$email/home.html", "w+");

                fwrite($fpHtml, "
                    $modelHtml
                ");

                fclose($fpHtml);

                $fpPhp = fopen("../users/$email/styles.php", "w+");

                fwrite($fpPhp, "
                    $modelPhp
                ");

                fclose($fpPhp);

                $fpChange = fopen("../users/$email/change.html", "w+");

                fwrite($fpChange,"
                    $modelChange          
                ");

                fclose($fpChange);

                header('Location: ../login.php');
                die();
            }
        }
    }
