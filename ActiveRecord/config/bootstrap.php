<?php

require_once( 'vendor/autoload.php' );

$dotenv = Dotenv\Dotenv::create( dirname( dirname( __FILE__ ) ) );
$dotenv->load();

$database = new \Config\Database();
$database->boot();