<?php

namespace App\Core;

use App\Mail\SupplierBaseMail;
use Illuminate\Support\Facades\Mail;

class SupplierBaseMailer
{
    public function sendSupplierBase($email, $name, $link)
    {
        $details = [
            'link' => $link
        ];
        Mail::to($email)->send(new SupplierBaseMail($details));
    }
}
