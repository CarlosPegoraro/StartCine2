<?php

//Create the vars for sql insert
function statusRecord($var)
{
    $name = $var->name();
    $email = $var->email();
    $pass = $var->pass();

    return $email;
    return $pass;
    return $name;
}

//Prepare this datas for insert in sql data base
function makeRecord($conect, $sql, $parameter1, $parameter2, $parameter3) 
{
    if($parameter1 === null || $parameter2 === null || $parameter3 === null)
    {
        echo "<p>Error!</p>";
    }
    $stmt = $conect->prepare($sql);
    $stmt->bindValue(1, $parameter1);
    $stmt->bindValue(2, $parameter2);
    $stmt->bindValue(3, $parameter3);

    $stmt->execute();
}