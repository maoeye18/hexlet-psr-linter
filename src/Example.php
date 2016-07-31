<?php

namespace PSRLinter;

class Example
{
    private $num;

    public function __construct()
    {
        $this->num = 0;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }
}
