<?php

require_once( 'config/bootstrap.php' );

if (\App\user::find( '1' ) === null) {

    $user = new \App\user;
    $user->name = "Rafael Calhau";
    $user->email = "rafael@calhau.me";
    $user->save();
    
}

d( \App\User::all() );

echo 'Playing around with Illuminate Database and others cool things.';