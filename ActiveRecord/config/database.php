<?php

namespace Config;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database 
{
    private $capsule;

    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => getenv('DB_HOST'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USER'),
            'password'  => getenv('DB_PASSW'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        
        $this->capsule = $capsule;
    }

    public function boot()
    {
        return $this->capsule->bootEloquent();
    }
}