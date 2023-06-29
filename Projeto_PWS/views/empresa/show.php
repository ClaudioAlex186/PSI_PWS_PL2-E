<h2 class="text-left top-space">Empresa Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
                <tr>
                    <th><h3>Designação social </h3></th><td><h3><?=$empresa->designacaosocial?></h3></td>
                </tr>
                 <tr>
                    <th><h3>email</h3></th><td><h3><?=$empresa->email?></h3></td>
                 </tr>
                 <tr>
                    <th><h3>telefone</h3></th><td><h3><?=$empresa->telefone?></h3></td>
                 </tr>
                <tr>
                    <th><h3>nif</h3></th><td><h3><?=$empresa->nif?></h3></td>
                </tr>
                <tr>
                    <th><h3>morada</h3></th><td><h3><?=$empresa->morada?></h3></td>
                </tr>
                <tr>
                    <th><h3>codigo postal</h3></th><td><h3><?=$empresa->codigopostal?></h3></td>
                </tr>
                <tr>
                    <th><h3>localidade</h3></th><td><h3><?=$empresa->localidade?></h3></td>
                </tr>
                <tr>
                    <th><h3>capital social</h3></th><td><h3><?=$empresa->capitalsocial?></h3></td>
                </tr>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=empresa&a=index" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div><!-- /row -->