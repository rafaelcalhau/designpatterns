<?php

namespace App\Classes;

use App\Classes\AbstractBookFactory;

class Utils
{
    public static function testConcreteFactory(AbstractBookFactory $bookFactoryInstance)
    {
        $phpBookOne = $bookFactoryInstance->makePHPBook();
        self::writeln('First PHP Author: '.$phpBookOne->getAuthor());
        self::writeln('First PHP Title: '.$phpBookOne->getTitle());

        $phpBookTwo = $bookFactoryInstance->makePHPBook();
        self::writeln('Second PHP Author: '.$phpBookTwo->getAuthor());
        self::writeln('Second PHP Title: '.$phpBookTwo->getTitle());

        $mySqlBook = $bookFactoryInstance->makeMySQLBook();
        self::writeln('MySQL Author: '.$mySqlBook->getAuthor());
        self::writeln('MySQL Title: '.$mySqlBook->getTitle());
    }

    public static function writeln($line_in) {
        echo $line_in."<br/>";
    }
}