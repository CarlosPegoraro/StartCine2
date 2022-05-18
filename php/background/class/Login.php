<?php

namespace StartCine;

class Login
{
    //vars
    private string $email;
    private string $pass;

    //function construct
    public function __construct(string $email, string $pass)
    {
       $this->email = $email;
       $this->pass = $pass;
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