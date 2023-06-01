<?php

require_once 'models/Auth.php';
require_once 'controllers/Controller.php';
class LoginController extends Controller
{
    public function index()
    {
        //devolve a vista de login
        $this->renderView('login','index',[],'login');
    }

    public function checklogin(){

        $user = $this->getHTTPPostParam('username');
        $pass = $this->getHTTPPostParam('password');


        $auth = new Auth();

        if ($auth ->CheckAuth($user,$pass)){
            echo 'logn com ok '.$auth->getUserName().' '.$auth->getUserId().' '.$auth->getUserRole();
            //$this->redirectToRoute('plano','index');
        }else{
            echo 'utilzador não existe nao existe';
            $this->renderView('login','index',[],'login');

        }

        //$this-> renderView('auth','index');

    }
}