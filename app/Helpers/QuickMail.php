<?php namespace App\Helpers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class QuickMail
{
    public static function sendSupport( $body, $subject = '' )
    {
        if ( $subject == '' )
        {
            $subject = ucfirst( App::environment()) . ' Support';
        }

        Mail::Send( 'mail.support', array( 'body' => $body ), function( $m ) use( $subject )
        {
            $m->to( env('SUPPORT_MAIL_ADDR' ), env( 'SUPPORT_MAIL_NAME' ));
            $m->subject( $subject );
        });
    }
}