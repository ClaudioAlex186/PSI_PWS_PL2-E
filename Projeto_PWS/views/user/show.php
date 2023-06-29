<h2 class="text-left top-space">Book Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
                <tr>
                    <th><h3>Username </h3></th><td><h3><?=$user->username?></h3></td>
                </tr>
                 <tr>
                    <th><h3>Email</h3></th><td><h3><?=$user->email?></h3></td>
                 </tr>
                 <tr>
                    <th><h3>nif</h3></th><td><h3><?=$user->nif?></h3></td>
                 </tr>
                <tr>
                    <th><h3>role</h3></th><td><h3><?=$user->role?></h3></td>
                </tr>
                <tr>
                    <th><h3>telefone</h3></th><td><h3><?=$user->telefone?></h3></td>
                </tr>
                <tr>
                    <th><h3>morada</h3></th><td><h3><?=$user->morada?></h3></td>
                </tr>
                <tr>
                    <th><h3>codigo Postal</h3></th><td><h3><?=$user->codigopostal?></h3></td>
                </tr>
                <tr>
                    <th><h3>localidade</h3></th><td><h3><?=$user->localidade?></h3></td>
                </tr>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=user&a=index" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div><!-- /row -->