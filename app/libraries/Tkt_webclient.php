<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tkt_webclient
{
    public $client;
    /**
    * param is array
    * param include: host
    */
    public function __construct($params)
    {
        require_once APPPATH.'third_party/class.HttpClient.php';
        $this->client = new HttpClient($params['host']);
    }

    public function get($path, $data = false)
    {
        return $this->client->get($path, $data = false);
    }

    public function post($path, $data)
    {
        return $this->client->post($path, $data);
    }

    public function setUserAgent($string)
    {
        $this->client->setUserAgent($string);
    }

    public function setAuthorization($username, $password)
    {
        $this->client->setAuthorization($username, $password);
    }

    public function setCookies($array)
    {
        $this->client->setCookies($array);
    }

    public function getCookies()
    {
        return $this->client->getCookies();
    }

    public function getHeader($header)
    {
        return $this->client->getHeader($header);
    }

    public function getError()
    {
        return $this->client->getError();
    }

    public function getStatus()
    {
        return $this->client->getStatus();
    }

    public function getContent()
    {
        return $this->client->getContent();
    }
    
    public function getHeaders()
    {
        return $this->client->getHeaders();
    }
}