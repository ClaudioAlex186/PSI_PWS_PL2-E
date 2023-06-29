<h2 class="text-left top-space">Empresa Edit</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div>
        <form action="index.php?c=empresa&a=update&id=<?=$empresa->id?>" method="post">
            Designação Social:<input type="text" name="designacaosocial" value="<?php if(isset($empresa)) { echo $empresa->designacaosocial; }?>"><br>
            Email:<input type="text" name="email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>"><br>
            telefone:<input type="text" name="telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>"><br>
            nif:<input type="text" name="nif" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>"><br>
            morada:<input type="text" name="morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>"><br>
            codigo Postal:<input type="text" name="codigopostal" value="<?php if(isset($empresa)) { echo $empresa->codigopostal; }?>"><br>
            localidade:<input type="text" name="localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>"><br>
            capital social:<input type="text" name="capitalsocial" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>"><br>
            <br>
            <input type="submit" class="btn btn-info" value="Update">
            <a href="index.php?c=empresa&a=index" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div><!-- /row -->