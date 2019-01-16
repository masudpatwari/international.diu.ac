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
        $emails = imap_search($this->conn, 'ALL', SE_FREE, 'UTF-8');
        if (!empty($emails))
        foreach ($emails as $n){
            $data[] = $this->getMessage($n);
        }
        return $data;
    }

    public function getMessage($messageId)
    {
        $body = [];
        $h = imap_header($this->conn, $messageId);
        $s = imap_fetchstructure($this->conn, $messageId);
        if (empty($s->parts))
        {
            $body['plan'] = imap_body($this->conn, $messageId);
        }
        else
        {
            foreach ($s->parts as $part_no => $p)
            {
                $body['type'][] = $p->subtype;
                if ($p->type == 0)
                {
                    if ($p->subtype == 'PLAIN')
                    {
                        $body['plan'][] = $this->partEncoding($messageId, 1, $p->encoding);
                    }
                    else
                    {
                        $body['html'][] = $this->partEncoding($messageId, 2, $p->encoding);
                    }
                }

                if ($p->type == 1)
                {
                    $body['html'][] = $this->partEncoding($messageId, 1.1, 4);
                    //$body['img'][] = $this->partEncoding($messageId, $part_no+1, 5);
                    $body['img1'][] = $this->getParts($messageId, $p, 1.2);
                    $body['img2'][] = $this->getParts($messageId, $p, 1.3);
                }

                if ($p->type > 2)
                {
                    $body['attachment'][] = $this->getAttachmentFiles($p);
                }
            }

        }
        return [
            'subject' => $h->subject,
            'body' => $body,
        ];
    }

    public function getParts($messageId, $p, $part_no)
    {

        if($part_no) {
            $data = imap_fetchbody($this->conn, $messageId, $part_no);
        }
        else {
            $data = imap_body($this->conn, $messageId);
        }

        if ($p->encoding == 4)
        {
            $data = quoted_printable_decode($data);
        }
        elseif ($p->encoding == 3)
        {
            $data = base64_decode($data);
        }

        return $data;


        /*if (!empty($p->parameters))
        {
            foreach ($p->parameters as $x){
                $params[strtolower($x->attribute)] = $x->value;
            }
        }
        if (!empty($p->dparameters))
        {
            foreach ($p->dparameters as $x){
                $params[strtolower($x->attribute)] = $x->value;
            }
        }*/


        /*if (!empty($params['filename']) )
        {
            $filename = (!empty($params['filename'])) ? $params['filename'] : $params['name'];
            $attachments[$filename] = $data;
            if (file_exists('email_attachments/'.$filename.''))
            {
                $file = fopen( 'email_attachments/'.$filename.'',"w+");
                fwrite($file, $data);
                fclose($file);
            }
            $data = $filename;
        }*/

        /*if ($p->type == 0 && $data)
        {
            if (strtolower($p->subtype) == 'plain')
            {
                $plainmsg .= trim($data) ."\n\n";
            }
            else
            {
                $htmlmsg.= $data ."<br><br>";
                $charset = $params['charset'];
            }
        }
        else if($p->type == 2 && $data)
        {
            $plainmsg .= $data."\n\n";
        }*/
    }

    public function partEncoding($messageId, $partNumber, $encoding)
    {
        //$data = imap_fetchbody($this->conn, $messageId, $partNumber);

        if($partNumber) {
            $data = imap_fetchbody($this->conn, $messageId, $partNumber);
        }
        else {
            $data = imap_body($this->conn, $messageId);
        }

        switch($encoding) {
            case 0: return $data; // 7BIT
            case 1: return $data; // 8BIT
            case 2: return $data; // BINARY
            case 3: return base64_decode($data); // BASE64
            case 4: return quoted_printable_decode($data); // QUOTED_PRINTABLE
            case 5: return $data; // OTHER
        }
    }

    public function getAttachmentFiles($p)
    {
        $filename = "";
        if (!empty($p->dparameters))
        {
            foreach ($p->dparameters as $x){
                if (strtolower($x->attribute) == 'filename')
                {
                    $filename = $x->value;
                }
            }
        }
        if (!empty($p->parameters))
        {
            foreach ($p->parameters as $x){
                if (strtolower($x->attribute) == 'name')
                {
                    $filename = $x->value;
                }
            }
        }

        return $filename;
    }


    public function getStructure($messageId)
    {
        return imap_fetchstructure($this->conn, $messageId);
    }

    public function getEncodingType($messageId)
    {
        $encodings = [
            0 => '7BIT',
            1 => '8BIT',
            2 => 'BINARY',
            3 => 'BASE64',
            4 => 'QUOTED-PRINTABLE',
            5 => 'OTHER',
        ];

        $structure = $this->getStructure($messageId);
        return $encodings[$structure->encoding];
    }

    public function getBodyType($messageId)
    {
        $types = [
            0 => 'text',
            1 => 'multipart',
            2 => 'message',
            3 => 'application',
            4 => 'audio',
            5 => 'image',
            6 => 'video',
            7 => 'model',
            8 => 'other',
        ];

        $structure = $this->getStructure($messageId);
        return $types[$structure->type];
    }

    public function getMailboxInfo()
    {
        return imap_mailboxmsginfo($this->conn);
    }


    /*
     * Encoding functions
     *
     * */

    public function decode8Bit($text) {
        return quoted_printable_decode(imap_8bit($text));
    }

    public function decode7Bit($text) {
        // If there are no spaces on the first line, assume that the body is
        // actually base64-encoded, and decode it.
        $lines = explode("\r\n", $text);
        $first_line_words = explode(' ', $lines[0]);
        if ($first_line_words[0] == $lines[0]) {
            $text = base64_decode($text);
        }
        // Manually convert common encoded characters into their UTF-8 equivalents.
        $characters = array(
            '=20' => ' ', // space.
            '=E2=80=99' => "'", // single quote.
            '=0A' => "\r\n", // line break.
            '=A0' => ' ', // non-breaking space.
            '=C2=A0' => ' ', // non-breaking space.
            "=\r\n" => '', // joined line.
            '=E2=80=A6' => '…', // ellipsis.
            '=E2=80=A2' => '•', // bullet.
        );
        // Loop through the encoded characters and replace any that are found.
        foreach ($characters as $key => $value) {
            $text = str_replace($key, $value, $text);
        }
        return $text;
    }
}
