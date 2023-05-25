<?php


class Auth
{
    public function __construct()
    {
        if(session_status()!=2)
        {
            session_start();
        }
    }

    public function getUserName()
    {
        if(isset($_SESSION['username'])){
            return $_SESSION['username'];
        }else
            return '';
    }

    public function CheckAuth($user,$pass)
    {

        $username='hugo';
        $password='123';

        if(($user == $username) && ($pass==$password))
        {
            $_SESSION["username"] = $username;
            return true;
        }else{
            return false;
        }
    }

    public function IsLoggedIn()
    {
        if(isset($_SESSION['username']))
        {
            return true;
        }else{
            return false;
        }
    }

    public function Logout()
    {

        session_destroy();
    }
}