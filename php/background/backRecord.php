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
                //Create the file emai.html using the function fopen, fwrite and fclose
                $tittle   = "StartCine - $email"; 

                $fp = fopen("../users/$email.html", "w+");

                fwrite($fp, "
                    $model
                ");

                fclose($fp);

                header('Location: ../login.php');
                die();
            }
        }
    }
?>