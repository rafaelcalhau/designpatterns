<?php

namespace App\Classes;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    
    abstract function makeMySQLBook();
}