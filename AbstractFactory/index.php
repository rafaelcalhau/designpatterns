<?php

if (!is_file( 'vendor/autoload.php' )) {
    die( 'Please generate the autoload.' );
}

require_once( 'vendor/autoload.php' );

use App\Classes\Books\{
    OReilly\BookFactory as OReillyBookFactory,
    Sams\BookFactory as SamsBookFactory
};
use App\Classes\Utils;

Utils::writeln('<strong>BEGIN: TESTING ABSTRACT FACTORY PATTERN</strong>');
Utils::writeln('');

$bookFactoryInstance = new OReillyBookFactory;
Utils::writeln('<u>Testing OReilly\'s BookFactory</u>');
Utils::testConcreteFactory($bookFactoryInstance);
Utils::writeln('');

$bookFactoryInstance = new SamsBookFactory;
Utils::writeln('<u>Testing Sams\'s BookFactory</u>');
Utils::testConcreteFactory($bookFactoryInstance);
