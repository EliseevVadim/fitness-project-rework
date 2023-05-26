<?php

namespace App\Core;

use App\Mail\SupplierBaseMail;
use Illuminate\Support\Facades\Mail;

class SupplierBaseMailer
{
    public function sendSupplierBase($email, $baseTypeId, $link)
    {
        $details = [
            'link' => $link,
            'baseTypeId' => $baseTypeId
        ];
        Mail::to($email)->send(new SupplierBaseMail($details));
    }
}
