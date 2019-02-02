<?php

namespace App\Classes\Taxes;

use App\Classes\Interfaces\Tax;

class C implements Tax
{
    public function calc(float $value)
    {
        return $value * 0.02;
    }
}