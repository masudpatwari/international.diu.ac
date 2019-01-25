<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\TicketAnswer;
use App\TicketAnswerAttachment;
use Illuminate\Http\Request;
use App\imapMail\imapMailReader;
use Illuminate\Support\Facades\DB;

class MailTicket extends Controller
{
    public function index()
    {
        /*$email = new imapMailReader();
        dd($email->getMessage(338));
        $data['messages'] = $email->getMessage(338);
        //return $data['messages'] = $email->inbox();*/

        $data['tickets'] = Ticket::orderBy('status', 'ASC')->paginate(15);
        return view('admin.tickets.index', $data);
    }

    public function make_ticket(Request $request)
    {
        $exists = Ticket::where('email', $request->email)->first();
        if (empty($exists))
        {

            $ticket = new Ticket();
            $ticket->name = $request->name;
            $ticket->email = $request->email;
            $ticket->present_nationality = $request->present_nationality;
            $ticket->interested_subject = $request->interested_subject;
            $ticket->body = $request->body;
            $ticket->status = 1;
            $ticket->save();
        }
        else
        {
            $ticket = new TicketAnswer();
            $ticket->ticket_id = $exists->id;
            $ticket->ticket_answer = $request->body;
            $ticket->type = 'client';
            $ticket->save();

            $ticket_ans = Ticket::find($exists->id);
            $ticket_ans->status = 2;
            $ticket_ans->save();
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

    public function show($id)
    {
        $data['tickets'] = Ticket::all();
        $data['ticket'] = Ticket::with('relTicketAnswer')->find($id);
        return view('admin.tickets.show', $data);
    }

    public function make_ticket_answer(Request $request, $id)
    {
        $signature = '<p>&nbsp;</p>
        <p>Thanking you</p>
        <p>&nbsp;</p>
        <p>Yours faithfully</p>
        <p>&nbsp;</p>
        <p>'.auth()->user()->name.'</p>
        <p>Designation</p>
        <p>Dhaka International University</p>
        ';

        $answer = new TicketAnswer();
        $answer->ticket_id = $id;
        $answer->ticket_answer = $request->body.$signature;
        $answer->type = (!empty(auth()->user()->id)) ? 'author' : 'client';
        $answer->save();

        $ticket = Ticket::find($id);
        $ticket->status = 3;
        $ticket->save();

        if($request->hasFile('attachment'))
        {
            $attachments = $request->file('attachment');
            $files = [];
            foreach ($attachments as $attachment)
            {
                $filename = ''.md5($attachment->getClientOriginalName()).'.' . $attachment->getClientOriginalExtension();
                $files[] = [
                    'answer_id' => $answer->id,
                    'original' => $attachment->getClientOriginalName(),
                    'filename' => $filename,
                    'type' => $attachment->getClientOriginalExtension(),
                ];
                if (in_array($attachment->getClientOriginalExtension(), ['jpg', 'jpeg', 'gif', 'png']))
                {
                    resizeImage($attachment);
                }
                $attachment->move(env('UPLOAD_PATH'), $filename);
            }
            TicketAnswerAttachment::insert($files);
        }

        if (!empty($answer->id))
        {
            return redirect()->back()->with('message', ['success' => 'Mail send successful!']);
        }
        else
        {
            return redirect()->back()->with('message', ['error' => 'Mail send failed!']);
        }
    }
}
