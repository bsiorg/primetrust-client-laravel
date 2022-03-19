<?php

namespace BsiOrg\PrimeTrust;

class PrimeTrust
{
    protected $url;
    protected $user;
    protected $pass;

    public function __construct()
    {
        $this->url = config('primetrust.url');
        $this->user = config('primetrust.user');
        $this->pass = config('primetrust.pass');
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
}
