<?php

namespace App\Classes;

abstract class AbstractBook
{
    abstract function getAuthor();
    
    abstract function getTitle();
}