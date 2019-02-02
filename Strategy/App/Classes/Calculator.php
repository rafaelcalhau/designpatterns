<?php

namespace App\Classes;

use App\Classes\Taxes;
use App\Classes\Interfaces\Tax;

class Calculator
{
    private $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function calc(Tax $tax)
    {
        return $tax->calc( $this->budget->getValue() );
    }
}