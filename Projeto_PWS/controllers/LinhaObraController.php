<?php

require_once 'controllers/Controller.php';
class LinhaObraController extends Controller
{
    public function index($idFolhaObra)
    {
        $fo = Folhaobra::find($idFolhaObra);
        $client = User::find($fo->client_id);// testar $fo->user->username
        $empresa = Empresa::first();
        $funcionario = User::find($fo->user_id);
        $servicos = Servico::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'index',['fo'=>$fo, 'client' => $client,'servicos'=>$servicos,'funcionario'=>$funcionario,'empresa'=>$empresa]);
    }


    public function create($idFolhaObra,$idServico)
    {
        $fo = Folhaobra::find($idFolhaObra);
        $client = User::find($fo->client_id);
        $empresa = Empresa::first();
        $funcionario = User::find($fo->user_id);
        $servico = Servico::find($idServico);
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'create',['fo'=>$fo, 'client' => $client,'servico'=>$servico,'funcionario'=>$funcionario,'empresa'=>$empresa]);

    }

    public function store()
    {
        $lo = new LinhaObra($this->getHTTPPost());
        $servico = Servico::find($lo->servicos_id);
        $iva = Iva::find($servico->ivas_id);

        //Campos Calculados
        $lo->valor = $lo->quantidade * $servico->precohora;
        $lo->valoriva = ($lo->valor * $iva->percentagem)/100;
        $lo->subtotal = $lo->valor+$lo->valoriva;


        if($lo->is_valid()) {
            $lo->save();
            $lo->folhaObra->atualizaValores();
            //redirecionar para o index
            $this->redirectToRoute('linhaObra', 'index', [$lo->id]);
        }else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('linhaObra', 'index',[$lo->id]);
        }
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

    public function selectServico($idFolhaObra)
    {
        $fo = Folhaobra::find($idFolhaObra);
        $servicos = Servico::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('linhaObra', 'selectServico',['fo'=>$fo,'servicos'=>$servicos]);
    }
}