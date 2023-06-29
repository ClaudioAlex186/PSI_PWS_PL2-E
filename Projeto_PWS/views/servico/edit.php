<h2 class="text-left top-space">Serviço Edit</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div>
        <form action="index.php?c=servico&a=update&id=<?=$servico->id?>" method="post">
            Referencia:<input type="text" name="referencia" value="<?php if(isset($servico)) { echo $servico->referencia; }?>"><br>
            Descrição:<input type="text" name="descricao" value="<?php if(isset($servico)) { echo $servico->descricao; }?>"><br>
            Preco/hora:<input type="text" name="precohora" value="<?php if(isset($servico)) { echo $servico->precohora; }?>"><br>
            Iva:<input type="text" name="ivas_id" value="<?php if(isset($servico)) { echo $servico->ivas_id; }?>"><br>

            <input type="submit" class="btn btn-info" value="Update">
            <a href="index.php?c=servico&a=index" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div><!-- /row -->