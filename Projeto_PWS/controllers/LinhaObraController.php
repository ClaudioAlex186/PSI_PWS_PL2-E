<?php

require_once 'controllers/Controller.php';
class LinhaObraController extends Controller
{
    public function index()
    {
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'index');
    }

    public function show($id)
    {

    }

    public function create()
    {


    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}