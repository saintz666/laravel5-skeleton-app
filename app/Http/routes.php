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
    $env = env( 'APP_ENV' );

    if ( strtolower( $level ) == 'error' && strpos( $message, 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException' ) === false && strpos( $message, 'Illuminate\Session\TokenMismatchException' ) === false )
    {
        App\Helpers\QuickMail::sendSupport( "<pre>$message</pre>", 'Random Error (' . ucfirst( $env ) . ')' );
    }
});

Route::get('/', 'WelcomeController@index');
