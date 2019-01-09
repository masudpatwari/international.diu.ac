<?php

namespace App\imapMail;

class imapMailReader
{
    public $conn;

    private $server = 'mail.diu-bd.net';
    private $user   = 'mesbaul.it@diu-bd.net';
    private $pass   = 'dIU!@#941)(';
    private $port   = 143;

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
        $d = imap_body($this->conn, 1);
        dd($d);
    }
}
