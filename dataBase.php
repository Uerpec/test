<?php
class DataBase {
    public $host;
    public $user;
    public $password;
    public $base;

    public function __construct($host,$user,$password='',$base)    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->base = $base;

        mysqli_connect($host,$user,$password,$base)? $mess='успех':$mess='хуй';
        echo $mess;
    }

    public function connection_info ()    {
        echo $this->host;
        echo $this->user;
        echo $this->password;
        echo $this->base;
    }
}
