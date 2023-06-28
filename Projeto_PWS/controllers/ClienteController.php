<?php

require_once 'controllers/Controller.php';
class ClienteController extends Controller
{
    public function index()
    {
        $users = User::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user', 'index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = Book::find($id);
        if (is_null($user)) {
            //TODO redirect to standard error page
            $this->renderView('bo', 'erro');
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('user', 'show', ['user' => $user]);
        }
    }

    public function create()
    {

        //mostrar a vista create
        $this->renderView('user', 'create');
    }

    public function store()
    {
        $user = new User($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            //redirecionar para o index
            $this->redirectToRoute('user', 'index');
        } else {

            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (isset($user->errors)) {
            echo $user->errors->on('name');
        }
        if (is_null($user)) {
            //TODO redirect to standard error page
            $this->renderView('bo', 'erro');
        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            //redirecionar para o index
            $this->redirectToRoute('user', 'index');
        } else {
            $genres = Genre::all();
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        //redirecionar para o index
        $this->redirectToRoute('user', 'index');
    }
}