<?php

namespace App\Core;

use App\Mail\ConfirmedRegistrationMail;
use Illuminate\Support\Facades\Mail;

class AuthorizationMailer
{
    public function sendAuthorizationMessage($email, $name, $link)
    {
        $details = [
            'programName' => $name,
            'link' => $link
        ];
        Mail::to($email)->send(new ConfirmedRegistrationMail($details));
    }
}
