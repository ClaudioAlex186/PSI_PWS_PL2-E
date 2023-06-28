<?php
require_once 'controllers/Controller.php';

use Carbon\Carbon;
class FolhaObraController extends Controller
{
    public function index()
    {

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('folhaObra', 'index');
    }

    public function create()
    {
        //mostrar a vista create
        $this->renderView('folhaObra', 'create');
    }

    public function store($idCliente)
    {
        $folhaObra = new Folhaobra();
        $auth = new Auth();
        $folhaObra ->data = Carbon::now();
        $folhaObra ->valortotal=0;
        $folhaObra ->ivatotal=0;
        $folhaObra ->estado='Em lançamento';
        $folhaObra ->user_id=$auth->getUserId();
        $folhaObra ->client_id=$idCliente;
        if($folhaObra->is_valid()) {
            $folhaObra->save();
            //redirecionar para o index
            $this->redirectToRoute('linhaObra', 'index', [$folhaObra->id]);
        }else {
            $users = User::all();
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('folhaObra', 'selectCliente',['users'=>$users]);
        }


    }

    public function selectCliente()
    {
        $users = User::find_all_by_role('cliente');
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('folhaObra', 'selectCliente',['users'=>$users]);
    }
}