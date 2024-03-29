<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SupplierBaseMail extends Mailable
{
    use Queueable, SerializesModels;

    private $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        switch ($this->details['baseTypeId'])
        {
            case 1:
                return $this
                    ->subject('Ссылка на материал выбранной базы')
                    ->view('emails.supplierBaseFamily', ['details' => $this->details]);
            case 2:
                return $this
                    ->subject('Ссылка на материал выбранной базы')
                    ->view('emails.supplierBaseBusiness', ['details' => $this->details]);
            default:
                abort(409);
        }
    }
}
