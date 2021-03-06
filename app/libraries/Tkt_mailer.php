<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tkt_mailer
{
    private $mail;
    
    public function __construct()
    {
        require_once APPPATH.'third_party/class.phpmailer.php';
        $this->mail = new PHPMailer;
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->Port = 465;
        $this->mail->SMTPSecure = 'ssl';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = "trankhanhtoan321@gmail.com";
        $this->mail->Password = "BUKT25041996";
        $this->mail->setFrom('trankhanhtoan321@gmail.com', 'Trần Khánh Toàn');
        $this->mail->addReplyTo('trankhanhtoan321@gmail.com', 'Trần Khánh Toàn');
    }

    public function addTo($address, $name = '')
    {
        $this->mail->addAddress($address,$name);
    }

    public function addCC($address, $name = '')
    {
        $this->mail->addCC($address,$name);
    }

    public function addBCC($address, $name = '')
    {
        $this->mail->addBCC($address,$name);
    }

    public function setBody($s)
    {
        $this->mail->msgHTML($s);
    }

    public function setSubject($s)
    {
        $this->mail->Subject = $s;
    }

    public function send()
    {
        return $this->mail->send();
    }

    public function getError()
    {
        return $this->mail->ErrorInfo;
    }

    public function setUsername($name)
    {
        $this->mail->Username = $name;
    }

    public function setPassword($pass)
    {
        $this->mail->Password = $pass;
    }

    public function setFrom($address, $name = '', $auto = true)
    {
        $this->mail->setFrom($address, $name, $auto);
    }

    public function addReplyTo($address, $name = '')
    {
        $this->mail->addReplyTo($address,$name);
    }
}