<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';
class FoController extends Controller
{
    public function __construct()
    {
        //proteção
        $this->authorizationFilterAllows(['cliente']);
    }

    public function index()
    {
        //devolve a vista do dashboard
        $this->renderView('fo','index',[],'fo');
    }

}