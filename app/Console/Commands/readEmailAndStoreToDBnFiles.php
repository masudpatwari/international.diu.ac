<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Libraries\MailReader;
use App\Ticket;
use App\TicketAnswer;

class readEmailAndStoreToDBnFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'readEmailAndStoreToDBnFiles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'read Email then Store mail to DB and attachments in filesystem';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $emailContentArray = (new MailReader())->getData();

      $this->insertMail($emailContentArray);

      /*dd($emailContentArray);
      if( $emailContentArray ){
        foreach ($emailContentArray as $emailData) {

        }
      }*/
    }

    public function insertMail($mailArray)
    {
        foreach ($mailArray as $key => $value) {
            $exists = Ticket::where('email', $value['from_email'])->first();
            if (empty($exists)) {
                return NULL;
            }
            else
            {
                $ticket = new TicketAnswer();
                $ticket->ticket_id = $exists->id;
                $ticket->ticket_answer = $value['body'];
                $ticket->type = 'client';
                $ticket->answer_by = 1;
                $ticket->save();

                $ticket_ans = Ticket::find($exists->id);
                $ticket_ans->status = 2;
                $ticket_ans->save();
            }
        }
    }
}
