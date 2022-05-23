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
            die();
        }

        //subtrate the @gmail.com of $email
        $subEmail = substr($email, 0, -10);

        //Create the var using the class Record
        $record = new Record($name, $subEmail, $pass1);

        //The sql code from insert datas
        $sql = "INSERT INTO users (NAME, EMAIL, PASS) VALUES (?,?,?);";

        //Function for show the datas from data base
        statusRecord($record);

        //check if password 1 is some password 2
        if($pass1 == $pass2)
        {
            $registered = makeRecord($conn, $sql, $name, $subEmail, $pass1);

            if($registered)
            {
                echo "<p>Can't save the data!</p>";
            } else
            {

                //Create a table with the username
                $sql2 = "CREATE TABLE $subEmail(
                    USER VARCHAR(100),
                    SIDECOLOR VARCHAR(100),
                    BACKCOLOR1 VARCHAR(100),
                    BACKCOLOR2 VARCHAR(100)
                    );";

                $stmt = $conn->prepare($sql2);
                $stmt->execute();
                
                //Insert default values
                $sql3 = "INSERT INTO $subEmail (USER, SIDECOLOR, BACKCOLOR1, BACKCOLOR2) VALUES (?,?,?,?);";

                $stmt = $conn->prepare($sql3);
                $stmt->bindValue(1, $name);
                $stmt->bindValue(2, '#7cebe8');
                $stmt->bindValue(3, '#3a3a3a');
                $stmt->bindValue(4, '#747474');
                $stmt->execute();
            
                //Create the folder using the function is_dir and mkdir
                $path = "../users/$subEmail";
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }
                
                //create the outhers files
                $fpHtml = fopen("../users/$subEmail/home.html", "w+");

                fwrite($fpHtml, "
                    $modelHtml
                ");

                fclose($fpHtml);

                $fpPhp = fopen("../users/$subEmail/styles.php", "w+");

                fwrite($fpPhp, "
                    $modelPhp
                ");

                fclose($fpPhp);

                $fpChange = fopen("../users/$subEmail/change.php", "w+");

                fwrite($fpChange,"
                    $modelChange          
                ");

                fclose($fpChange);

                header('Location: ../login.php');
                die();
            }
        }
    }
