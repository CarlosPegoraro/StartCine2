<?php

    $head = "
            <meta charset='utf-8'>\n
            <link rel='stylesheet' href='css/search.css'>\n
            <link rel='icon' type='imagem/png' href='../img/iconCine.png' />\n
            ";

    $body = "
            <p class='tittle'>Search the your favorite saga</p>\n
             <form method='POST' action='background/backSearch.php'>\n
                <div>\n
                    <p class='datas'>\n
                        Don't use space, use &; <br> <br>\n
                        Saga Name: <input type='text' id='text' name='saga'>\n
                    </p>\n
                </div>\n
                <input type='submit' class='button' value='Connect'>\n
            </form>\n
            <br>\n
            <a href='../index.html'>Back to home</a>\n
            ";

?>