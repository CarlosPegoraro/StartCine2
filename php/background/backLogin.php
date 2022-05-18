<?php

    //Call the outhets arquives
    use StartCine\Login;

    require_once '../connect.php';
    require_once '../background/functionSQL/login.php';
    require_once '../background/class/Login.php';

    //Call the connect function
    $conn = connect();

    //Check the datas sent by form in arquive login
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass']))
    {
        //Receive the datas sent by form in arquive login
        $email = addslashes($_POST['email']);
        $pass = addslashes($_POST['pass']);

        //Create the var using the class Login
        $Login = new Login($email, $pass);
        $email = $Login->email();
        $password = $Login->pass();

        //The sql code from select datas
        $sql = "SELECT * FROM users WHERE EMAIL = :email AND PASS = :pass;";

        //Function for show the datas from data base
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":pass", $password);
        $stmt->execute();  
        
        $search = $stmt->fetchAll();

        //Check if data is valid
        foreach($search as $check)
        {
            $emailSearch = $check['email'];
            $emailLogin = "$email.html";
            if($emailSearch == $email)
            {
                //If not valid
                echo "<p>Error</p>";
                die();
            }
            else
            {
                //if valid
                header("Location: ../users/$emailLogin");
                die();
            }
        }
    }
    //The datas is not valid
    echo "Error, <a href='../login.php'>back</a>";
?>