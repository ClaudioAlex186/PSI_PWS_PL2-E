<h2 class="text-left top-space">Iva Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
                <tr>
                    <th><h3>Id </h3></th><td><h3><?=$iva->percentagem?></h3></td>
                </tr>
                 <tr>
                    <th><h3>Name</h3></th><td><h3><?=$iva->descricao?></h3></td>
                 </tr>
                 <tr>
                    <th><h3>ISBN</h3></th><td><h3><?=$iva->vigor?></h3></td>
                 </tr>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=iva&a=index" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div><!-- /row -->