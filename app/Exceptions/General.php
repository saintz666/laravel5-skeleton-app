<?php namespace App\Exceptions;

class General extends \Exception
{
    public function __construct( $msg = 'Internal application error', $code = 0 )
    {
        parent::__construct( $msg, $code );
    }
}
