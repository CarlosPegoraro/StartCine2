<?php

    //Check the datas sent by form in arquive login
    if(isset($_POST['saga']) && !empty($_POST['saga']))
    {
        //Receive the datas sent by form in arquive login
        $saga = addslashes($_POST['saga']);

        $sagaFile = "$saga.html";

        header("Location:  ../SearchSites/$sagaFile");
        die();
    } else {
        header("Location:  ../search.html");
        die();
    }
?>