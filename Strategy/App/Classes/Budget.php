<?php

namespace App\Classes;

class Budget
{
    private $value;

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(float $value)
    {
        $this->value = $value;
    }
}