@extends('mail.layout')

@section('content')
{!! $body !!}
<?php
    if ( !empty( $_GET ))
    {
        echo '<p>$_GET data:</p><pre>', print_r( $_GET, 1 ), "</pre>\n";
    }

    if ( !empty( $_POST ))
    {
        echo '<p>$_POST data:</p><pre>', print_r( $_POST, 1 ), "</pre>\n";
    }

    if ( !empty( $_SERVER ))
    {
        $server = $_SERVER;

        foreach( ['DB_HOST', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'] as $item )
        {
            if ( isset( $server[$item] ))
            {
                unset( $server[$item] );
            }
        }

        echo '<p>$_SERVER data:</p><pre>', print_r( $server, 1 ), "</pre>\n";
    }

    if ( !empty( $_COOKIE ))
    {
        echo '<p>$_COOKIE data:</p><pre>', print_r( $_COOKIE, 1 ), "</pre>\n";
    }

    if ( !empty( $_SESSION ))
    {
        echo '<p>$_SESSION data:</p><pre>', print_r( $_SESSION, 1 ), "</pre>\n";
    }

    echo '<p>Laravel Session:</p><pre>', print_r( Session::all(), 1 ), "</pre>\n";
?>
@stop