<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\imapMail\imapMailReader;

class MailTicket extends Controller
{
    public function inbox()
    {
        $email = new imapMailReader();
        return $email->inbox();
        return $email->num_msg();
        return view('mail.inbox');
    }
}
