<?php

require_once 'controllers/Controller.php';
class LinhaObraController extends Controller
{
    public function index($idFolhaObra)
    {
        $fo = Folhaobra::find($idFolhaObra);
        $client = User::find($fo->client_id);
        $servicos = Servico::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'index',['fo'=>$fo, 'client' => $client,'servicos'=>$servicos]);
    }


    public function create($idFolhaObra,$idServico)
    {


    }
    /*
    public function store()
    {
        $lo = new LinhaObra();
        //$lo->id = ;
        //$lo->quantidade= ;

        //Campos Calculados
        $lo->valor = $lo->quantidade * preco unit $servicos->precoHora;
        $lo->valoriva = $lo->valor * taxa iva;
        $lo->subtotal = $lo->valor+$lo->valoriva;
        if($lo->is_valid()) {
            $lo->save();
            $lo->folhaObra->atualizaValores();
            //redirecionar para o index
            $this->redirectToRoute('linhaObra', 'index', [$lo->id]);
        }else {
            $users = User::all();
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('folhaObra', 'selectCliente',['users'=>$users]);
        }
    }*/

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }

    public function selectServico($idFolhaObra)
    {
        $servicos = Servico::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'selectServico',['servicos'=>$servicos]);
    }
}