<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imapMail\imapMailReader;

class MailTicket extends Controller
{
    public function inbox()
    {
        $email = new imapMailReader();
        //dd($email->getMessage(336));
        $data['messages'] = $email->getMessage(338);
       // return $data['messages'] = $email->inbox();
        return view('admin.mail.inbox', $data);
    }
}
