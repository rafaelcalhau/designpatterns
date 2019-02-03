<?php

namespace App\Classes\Books\Sams;

use App\Classes\AbstractBookFactory;
use App\Classes\Books\Sams\{ PHPBook, MySQLBook };

class BookFactory extends AbstractBookFactory
{
    private $context = 'Sams';

    public function makePHPBook()
    {
        return new PHPBook;
    }

    public function makeMySQLBook()
    {
        return new MySQLBook;
    }
}