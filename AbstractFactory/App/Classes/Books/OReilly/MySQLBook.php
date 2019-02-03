<?php

namespace App\Classes\Books\OReilly;

use App\Classes\AbstractMySQLBook;

class MySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    public function __construct()
    {
        $this->author = 'George Reese, Randy Jay Yager, and Tim King';
        $this->title = 'Managing and Using MySQL';
        
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}