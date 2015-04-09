<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Log::listen( function( $level, $message, $context )
{
    if ( strtolower( $level ) == 'error' )
    {
        \App\Helpers\QuickMail::sendSupport( "<pre>$message</pre>", 'App Error (' . ucfirst( env( 'APP_ENV' )) . ')' );
    }
});

Route::get('/', 'HomeController@index');
