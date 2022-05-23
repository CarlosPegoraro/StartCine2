<?php

namespace StartCine;

class Customer
{
    //vars
    private string $back1;
    private string $back2;
    private string $side;

    //function construct
    public function __construct(string $back1, string $back2, string $side)
    {
       $this->back1 = $back1;
       $this->back2 = $back2;
       $this->side = $side;
    }

    public function back1(): string
    {
        return $this->back1;
    }

    public function back2(): string
    {
        return $this->back2;
    }

    public function side(): string
    {
        return $this->side;
    }
}