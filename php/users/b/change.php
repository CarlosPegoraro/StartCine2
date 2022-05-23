
                    
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title> Customer </title>
        </head>
        <body>
            <form method='post' action='styles.php'>
                change you background color <input type='text' name='backColor1'> <br>
                change you background color <input type='text' name='backColor2'> <br>
                change you sideBar color <input type='text' name='sideColor'> <br>
                <input type='submit' value='Change'>
            </form>
        </body>
    </html>
    
    <?php
    
        //Call the outhets files
        use StartCine\Customer;
    
        
        require_once '../../connect.php';
        require_once '../../background/class/Customer.php';
        require_once '../../model.php';
    
        //Call the connect function
        $conn = connect();
    
        //Save the email without gmail.com
        $subEmail = substr($email, 0, -10);
    
        //Check the datas sent by form in file Customer
        if($_POST)
        {
            //Receive the datas sent by form in file Customer
            $back1 = $_POST['backColor1'];
            $back2 = $_POST['backColor2'];
            $side = $_POST['sideColor'];
    
            //Create the var using the class Customer
            $Customer = new Customer($back1, $back2, $side);
            $backSearch1 = $Customer->back1();
            $backSearch2 = $Customer->back2();
            $sideSearch = $Customer->side();
    
            //
            $sql = "INSERT INTO $subEmail (SIDECOLOR, BACKCOLOR1, BACKCOLOR2) VALUES (?,?,?);";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $side);
            $stmt->bindValue(2, $back1);
            $stmt->bindValue(3, $back2);
            $stmt->execute();
    
            //The sql code from select datas
            $sql2 = "SELECT * FROM $subEmail WHERE SIDECOLOR = :sideSearch AND BACKCOLOR1 = :backSearch1 AND BACKCOLOR2 = :backSearch2;";
    
            //Function for show the datas from data base
            $stmt = $conn->prepare($sql2);
            $stmt->bindValue(":sideSearch", $sideSearch);
            $stmt->bindValue(":backSearch1", $backSearch1);
            $stmt->bindValue(":backSearch2", $backSearch2);
            $stmt->execute();  
            
            $search = $stmt->fetchAll();
    
            //Check if data is valid
            foreach($search as $check)
            {
                $back1Saved = $check['backSearch1'];
                $back2Saved = $check['backSearch2'];
                $sideSaved = $check['sideSearch'];
                if($back1Saved == $back1 && $back2Saved == $back2 && $sideSaved == $side)
                {
                    //If not valid
                    echo "<p>Error</p>";
                    die();
                }
                else
                {
                    //if valid
                    $backColor1 = $back1;
                    $backColor2 = $back2;
                    $sideColor = $side;
                }
            }
        }
    ?>
              
                