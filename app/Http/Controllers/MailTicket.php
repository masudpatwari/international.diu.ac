<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\TicketAnswer;
use App\TicketAttachment;
use Illuminate\Http\Request;
use App\imapMail\imapMailReader;

class MailTicket extends Controller
{
    public function index()
    {
        /*$email = new imapMailReader();
        dd($email->getMessage(338));
        $data['messages'] = $email->getMessage(338);
        //return $data['messages'] = $email->inbox();*/

        $data['tickets'] = Ticket::all();
        return view('admin.tickets.index', $data);
    }

    public function make_ticket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->first_name = $request->first_name;
        $ticket->last_name = $request->last_name;
        $ticket->email = $request->email;
        $ticket->present_nationality = $request->present_nationality;
        $ticket->interested_subject = $request->interested_subject;
        $ticket->details = $request->details;
        $ticket->save();

        if (!empty($ticket->id))
        {
            return redirect()->back()->with('message', ['success' => 'Mail send successful!']);
        }
        else
        {
            return redirect()->back()->with('message', ['error' => 'Mail send failed!']);
        }
    }

    public function show($id)
    {
        $data['tickets'] = Ticket::all();
        $data['ticket'] = Ticket::with('relTicketAnswer')->find($id);
        return view('admin.tickets.show', $data);
    }

    public function make_ticket_answer(Request $request, $id)
    {
        $ticket = new TicketAnswer();
        $ticket->ticket_id = $id;
        $ticket->ticket_answer = $request->body;

        $ticket->save();

        if($request->hasFile('attachment'))
        {
            $attachments = $request->file('attachment');
            $files = [];
            foreach ($attachments as $attachment)
            {
                $filename = ''.md5($attachment->getClientOriginalName()).'.' . $attachment->getClientOriginalExtension();
                $files[] = [
                    'ticket_answer_id' => $ticket->id,
                    'attachment_file' => $filename,
                ];
                $attachment->move('uploads/', $filename);
            }
            TicketAttachment::insert($files);
        }



        if (!empty($ticket->id))
        {
            return redirect()->back()->with('message', ['success' => 'Mail send successful!']);
        }
        else
        {
            return redirect()->back()->with('message', ['error' => 'Mail send failed!']);
        }
    }
}
