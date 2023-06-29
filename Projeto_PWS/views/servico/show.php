<h2 class="text-left top-space">Serviço Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
                <tr>
                    <th><h3>Referencia </h3></th><td><h3><?=$servico->referencia?></h3></td>
                </tr>
                 <tr>
                    <th><h3>Descrição</h3></th><td><h3><?=$servico->descricao?></h3></td>
                 </tr>
                 <tr>
                    <th><h3>Preco/hora</h3></th><td><h3><?=$servico->precohora?></h3></td>
                 </tr>
                <tr>
                    <th><h3>Iva</h3></th><td><h3><?=$servico->ivas_id?></h3></td>
                </tr>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=servico&a=index" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div><!-- /row -->