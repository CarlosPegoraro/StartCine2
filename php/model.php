<?php

    if($_POST) {
        $emailModel = $_POST['email'];

    $modelHtml = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title> StartCine - " . $emailModel . "</title>
        <!-- CSS -->
        <link rel='stylesheet' href='css/" . $emailModel . ".css'>
        <link rel='icon' type='imagem/png' href='./img/iconCine.png' />
    </head>
    <body>
    
         <!--sidebar-->
        <div class='sideBar'>
            <!--Hyperlink for search-->
            <a href='../search.html'>
                <img class='sideBarIcon' src='../../img/iconSearch.png'>
            </a>
            <div class='divSpace'></div>
            <!--Hyperlink for strings-->
                <img class='sideBarIcon' src='../../img/inconConfig.png'>
            <div class='divSpace'></div>
            <!--Hyperlink for user-->
            <a href='php/login.php'>
                <img class='sideBarIcon' src='../../img/iconUser.png'>
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

    $modelCss = "
        :root {
            --size-bd: 100vh;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        
        
        
        body {
            overflow: hidden;
            position: relative;
            height: 100vh;
            width: 100%;
            text-align: right;
            background: linear-gradient(to right, rgb(46, 42, 42), rgb(14, 135, 172));
            background-image: url('img/background2.png');
            margin-right: 20%;
            padding-right: 2%;
        }
        
        
        
        
        .sideBar {
            width: 10%;
            height: 100%;
            background-color: rgb(33, 136, 136);
            margin-right: 3%;
            padding-top: 18%;
            padding-right: 2.5%;
            margin-left: 5%;
            margin-bottom: 2%;
            float: left;
        }
        
        .sideBarIcon {
            background-color: rgb(63, 63, 63);
            width: 100px;
            padding: 10%;
            height: 100px;
            border-radius: 20px;
        }
        
        
        
        
        #carrossel {
            width: 100vw;
            float: right;
            position: absolute;
        }
        
        #imagens {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            overflow: hidden;
            border-radius: 20px;
            border-width: 5px;
            border-style: solid;
            border-color: rgb(25, 129, 129);
        }
        
        .item {
            flex: none;
            scroll-snap-align: start;
            pointer-events: none;
            cursor: pointer;
        }
        
        
        .carrosselImag {
            width: 500px;
            height: 550px;
            object-fit: cover;
        }
        
        
        
        .wrapper {
            width: 67%;
            height: 35%;
            display:inline-flex;
            flex-wrap: nowrap;
            justify-content: center;
            float: inline-start;
            margin-right: 10%;
            position: relative;
        }
        
        .images {
            width: 20%;
            object-fit: cover;
            overflow: hidden;
            border-radius: 10px;
            object-position: center;
            object-fit: cover;
            transition: transform 1s ease-in-out;
            margin: 5px 10px;
        }
        .images > img {
            width: 100%;
            height: 100%;
        }
        .images > img:hover {
            transform: scale(1.2);
            cursor: pointer;
        }
        .gallery {
            position: fixed;
            top: 0;
            display: flex;
            width: 100%;
            height: 100%;
            background: rgb(0, 0, 0,0.6);
            justify-content: space-around;
            align-items: center;
            color: white;
            font-size: 35px;
            opacity: 0;
            pointer-events: none;
            transform: scale(0.8);
            transition: transform 1s ease-in-out;
        }
        .gallery-inner {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-inner > img{
            width: 80%;
        }
        .control-prev {
            position: fixed;
            left: 50px;
        
        }
        #close {
            color: rgb(184, 149, 149);
            position: fixed;
            top: 5px;
            right: 10px;
            cursor: pointer;
        }
        .control-next {
            position: fixed;
            right:50px;
        }
        .active {
            opacity: 1;
            pointer-events: auto;
            transform: scale(1);
        }
        
        
        
        
        .divSpace {
            height: 50px;
            background-color: rgba(240, 248, 255, 0);
        }
        
        .Space {
            height: 2%;
            background-color: rgba(240, 248, 255, 0);
        }
        
        .fundo {
            width: 100%;
            height: 100%;
            background-color: rgba(240, 248, 255, 0);
        }
    ";

    }

?>