<?php

namespace App\Classes\Interfaces;

interface Tax
{
    public function calc(float $value);
}