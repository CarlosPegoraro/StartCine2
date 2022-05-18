<?php

//Create the vars for sql insert
function statusLogin($var)
{
    $user = $var->user();
    $pass = $var->pass();

    return $user;
    return $pass;

}

//Prepare this datas for insert in sql data base
function makeLogin($conect, $sql, $parameter1, $parameter2) 
{
    if($parameter1 === null || $parameter2 === null)
    {
        echo "<p>Error!</p>";
    }
    $stmt = $conect->prepare($sql);
    $stmt->bindValue(':user', $parameter1);
    $stmt->bindValue(':pass', $parameter2);

    $stmt->execute();
}