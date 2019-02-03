<?php

namespace App\Classes\Books\OReilly;

use App\Classes\AbstractBookFactory;
use App\Classes\Books\OReilly\{ PHPBook, MySQLBook };

class BookFactory extends AbstractBookFactory
{
    private $context = 'OReilly';

    public function makePHPBook()
    {
        return new PHPBook;
    }

    public function makeMySQLBook()
    {
        return new MySQLBook;
    }
}