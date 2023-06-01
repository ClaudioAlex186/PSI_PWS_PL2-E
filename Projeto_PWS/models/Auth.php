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

    public function CheckAuth($username,$password)
    {
        $user = User::find_by_username_and_password($username,$password);

        if(is_null($user))
        {
            //atentcacao falhou
            return false;
        }else{
            $_SESSION['auth'] ['username'] = $user ->username;
            $_SESSION['auth'] ['userid'] = $user ->id;
            $_SESSION['auth'] ['userrole'] = $user ->role;
            return true;
        }
    }

    public function IsLoggedIn()
    {
        if(isset($_SESSION['auth']))
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

    public function getUserName()
    {
        if($this->IsLoggedIn()){
            return $_SESSION['auth'] ['username'];
        }else
            return '';
    }

    public function getUserId()
    {
        if($this->IsLoggedIn()){
            return $_SESSION['auth'] ['userid'];
        }else
            return '';
    }

    public function getUserRole()
    {
        if($this->IsLoggedIn()){
            return $_SESSION['auth'] ['userrole'];
        }else
            return '';
    }

    public function IsLoggedInAs($role=[])
    {
        if($this->IsLoggedIn()) {
            $role=$this->getUserRole();
            return in_array($role);
        }
    }

}