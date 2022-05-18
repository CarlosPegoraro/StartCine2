<?php

namespace StartCine;

class Record
{
    //vars
    private string $name;
    private string $email;
    private string $pass;

    public function __construct(string $name, string $email, string $pass)
    {
       $this->name = $name;
       $this->email = $email;
       $this->pass = $pass;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function pass(): string
    {
        return $this->pass;
    }
}

?>