<?php


class encry
{

    public $usu;
    public $pass;
    public $salt=5;
    public function base64($usu)
    {
        $salt = rand();
        return base64_encode($this->usu . $salt);
    }

    public function Md5($pass)
    {
        $salt = rand();
        return Md5($this->pass . $salt);
    }
}
?>