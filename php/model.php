<?php

    $model = "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>$tittle</title>
        <!-- CSS -->
        <link rel='stylesheet' href='css/styles.css'>
        <link rel='icon' type='imagem/png' href='./img/iconCine.png' />
    </head>
    <body>
    
         <!--sidebar-->
        <div class='sideBar'>
            <!--Hyperlink for search-->
            <a href='php/search.html'>
                <img class='sideBarIcon' src='./img/iconSearch.png'>
            </a>
            <div class='divSpace'></div>
            <!--Hyperlink for strings-->
            <img class='sideBarIcon' src='./img/inconConfig.png'>
            <div class='divSpace'></div>
            <!--Hyperlink for user-->
            <a href='php/login.php'>
                <img class='sideBarIcon' src='../img/iconUser.png'>
            </a>
            <div class='divSpace'></div>   
        </div><!--Margin top--><div class='Space'></div><!--Carrosel--><div id='carrosel'>
            <div id='imagens'>
                <!--item 1-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazBatman.jpg'>
                </div>
                <!--item 2-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazCaptainAmerican.jpg'>
                </div>
                <!--item 3-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazColdSouls.jpg'>
                </div>
                <!--item 4-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazDjango.jpg'>
                </div>
                <!--item 5-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazFantasticBeasts.jpg'>
                </div>
                <!--item 6-->
                <div class='item'>
                    <img class='carrosselImag' src='./img/cartazVforVendetta.jpg'>
                </div>
            </div>
        </div>
        
        <!--wrapper-->
        <div class='wrapper'>
            <div class='images'>
                <img src='./img/cartazIronMan.jpg' alt=''><p>ironmain</p>
            </div>
            <div class='images'>
                <img src='./img/cartazJusticeLeague.jpg' alt=''>
            </div>
            <div class='images'>
                <img src='./img/cartazMatrix.jpg' alt=''>
            </div>
            <div class='images'>
                <img src='./img/cartazRambo.jpg' alt=''>
            </div>
            <div class='images'>
                <img src='./img/cartazStanLee.webp' alt=''>
            </div>
        </div>
        
        <!--gallery-->
        <div class='gallery'>
            <i class='far fa-times-circle' id='close'></i>
            
            <div class='gallery-inner'>
                <img src='./img/doctor.jpg' alt=''>
            </div>
            <div class='control-prev'>
                <i class='fas fa-arrow-circle-left'></i>
            </div>
            <div class='control-next'>
                <i class='fas fa-arrow-circle-right'></i>
            </div>
        </div>
    
        <!--script js-->
        <script src='script.js'></script>
    </body>";

?>