<h2 class="text-left top-space">Book Detail</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
                <tr>
                    <th><h3>Id </h3></th><td><h3><?=$book->id?></h3></td>
                </tr>
                 <tr>
                    <th><h3>Name</h3></th><td><h3><?=$book->name?></h3></td>
                 </tr>
                 <tr>
                    <th><h3>ISBN</h3></th><td><h3><?=$book->isbn?></h3></td>
                 </tr>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=book&a=index" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div><!-- /row -->