<?php

namespace App\Http\Controllers;

use App\Mail\SendTicketMail;
use App\Ticket;
use App\TicketAnswer;
use App\TicketAnswerAttachment;
use Illuminate\Http\Request;
use App\imapMail\imapMailReader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailTicketController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'administrator')
        {
            $data['tickets'] = Ticket::orderBy('status', 'ASC')->paginate(15);
        }

        if (auth()->user()->role == 'employee')
        {
            $data['tickets'] = Ticket::orderBy('status', 'ASC')->paginate(15);
        }

        if (auth()->user()->role == 'agent')
        {
            $data['tickets'] = Ticket::with('relTicketAnswer')->where('agent_id', auth()->user()->id)->orderBy('status', 'ASC')->paginate(15);
        }

        if (auth()->user()->role == 'student')
        {
            $data['tickets'] = Ticket::with('relTicketAnswer')->where('email', auth()->user()->email)->orderBy('status', 'ASC')->paginate(15);
        }

        return view('admin.tickets.index', $data);
    }

    /*
     * Frontend contact page request.
    */
    public function make_ticket(Request $request)
    {
        $exists = Ticket::where('email', $request->email);
        if ($exists->exists() == false)
        {

            $ticket = new Ticket();
            $ticket->name = $request->name;
            $ticket->email = $request->email;
            $ticket->present_nationality = $request->present_nationality;
            $ticket->interested_subject = $request->interested_subject;
            $ticket->body = $request->body;
            $ticket->status = 1;
            $ticket->agent_id = NULL;
            $ticket->save();
        }
        else
        {
            $answer = $exists->first();
            $ticket = new TicketAnswer();
            $ticket->ticket_id = $answer->id;
            $ticket->ticket_answer = $answer->body;
            $ticket->type = 'client';
            $ticket->answer_by = auth()->user()->id;
            $ticket->save();

            $ticket_ans = Ticket::find($answer->id);
            $ticket_ans->status = 2;
            $ticket_ans->save();
        }
        return redirect()->back()->with('message', ['success' => 'Message send successful!']);
    }

    public function show($id)
    {
        if (auth()->user()->role == 'administrator')
        {
            $data['tickets'] = Ticket::all();
        }

        if (auth()->user()->role == 'employee')
        {
            $data['tickets'] = Ticket::all();
        }

        if (auth()->user()->role == 'agent')
        {
            $data['tickets'] = Ticket::where('agent_id', auth()->user()->id)->get();
        }

        if (auth()->user()->role == 'student')
        {
            $data['tickets'] = Ticket::where('email', auth()->user()->email)->get();
        }

        $data['ticket'] = Ticket::with('relTicketAnswer')->find($id);
        return view('admin.tickets.show', $data);
    }

    public function make_ticket_answer(Request $request, $id)
    {
        $files = [];
        if($request->hasFile('attachment'))
        {
            $attachments = $request->file('attachment');
            foreach ($attachments as $attachment)
            {
                $filename = ''.md5($attachment->getClientOriginalName()).'.' . $attachment->getClientOriginalExtension();
                $files[] = [
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
        }

        try {
            DB::beginTransaction();
            $answer = new TicketAnswer();
            $answer->ticket_id = $id;
            $answer->ticket_answer = $request->body;
            $answer->type = (auth()->user()->role != 'student') ? 'author' : 'client';
            $answer->answer_by = auth()->user()->id;
            $answer->save();

            $ticket = Ticket::find($id);
            $ticket->status = 3;
            $ticket->save();

            if (!empty($files))
            {
                foreach ($files as $key => $file)
                {
                    $files[$key]['answer_id'] = $answer->id;
                }
                TicketAnswerAttachment::insert($files);
            }
            DB::commit();
            return redirect()->back()->with('message', ['success' => 'Message send successful!']);
        } catch (\PDOException $e) {
            DB::rollBack();
            return redirect()->back()->with('message', ['error' => 'Message send failed!']);
        }
    }
}
