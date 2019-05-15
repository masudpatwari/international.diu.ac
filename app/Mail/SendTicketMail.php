<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTicketMail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $mailable =  $this->from('rms@diu-bd.net', 'Dhaka International University')
            ->subject('Subject')->view('admin.tickets.body', ['body' => $request->body]);

        if($request->hasFile('attachment'))
        {
            $attachments = $request->file('attachment');
            foreach ($attachments as $attachment)
            {
                $mailable->attach(
                    $attachment->getRealPath(),
                    [
                        'mime' => $attachment->getClientMimeType(),
                        'as' => $attachment->getClientOriginalName()
                    ]
                );
            }
        }


        return $mailable;
    }
}
