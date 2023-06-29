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
            $role= $auth->getUserRole();
            switch ($role){
                case 'admin':$this->redirectToRoute('bo','index');
                    break;
                case 'funcionario':$this->redirectToRoute('bo','index');
                    break;
                case 'cliente':$this->redirectToRoute('fo','index');
                    break;
            }
        }else{
            $this->renderView('login','index',[],'login');
            echo 'o utilizador não existe';

        }

        $this->renderView('login','index',[],'login');

    }
}