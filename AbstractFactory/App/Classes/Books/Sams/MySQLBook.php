<?php

namespace App\Classes\Books\Sams;

use App\Classes\AbstractMySQLBook;

class MySQLBook extends AbstractMySQLBook 
{
    private $author;
    private $title;

    public function __construct() {
        
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
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