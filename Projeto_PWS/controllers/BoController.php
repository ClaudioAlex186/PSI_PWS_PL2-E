<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';
class BoController extends Controller
{
    public function index()
    {
        //devolve a vista do dashboard
        $this->renderView('bo','index');
    }

}