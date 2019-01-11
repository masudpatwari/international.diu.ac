<?php

namespace App\imapMail;

class imapMailReader
{
    public $conn;

    /*private $server = 'mail.diu-bd.net';
    private $user   = 'mesbaul.it@diu-bd.net';
    private $pass   = 'dIU!@#941)(';
    private $port   = 143;*/

    private $server = 'mail.google.com';
    private $user   = 'rony.max24@gmail.com';
    private $pass   = 'error@#$';
    private $port   = 465;

    function __construct() {
        $this->connect();
    }

    public function close() {
        imap_close($this->conn);
    }

    public function connect() {
        $this->conn = imap_open('{'.$this->server.'/novalidate-cert}', $this->user, $this->pass);
    }

    public function num_msg()
    {
        return imap_num_msg($this->conn);
    }

    public function inbox()
    {
        //auth()->user()->email;
        //$d = imap_headerinfo($this->conn, 152);
        $d = imap_headers($this->conn);
       // $d = imap_fetch_overview($this->conn,"1:{$this->num_msg}",0);
        return $d;
    }

    public function mail_box_info()
    {
        return imap_mailboxmsginfo($this->conn);
    }
}
