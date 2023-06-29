<h1>Criar novo Serviço</h1>

<form action="index.php?c=servico&a=store" method="post">

    Referencia:<input type="text" name="referencia" value="<?php if(isset($servico)) { echo $servico->referencia; }?>"><br>
    Descrição:<input type="text" name="descricao" value="<?php if(isset($servico)) { echo $servico->descricao; }?>"><br>
    Preco/hora:<input type="text" name="precohora" value="<?php if(isset($servico)) { echo $servico->precohora; }?>"><br>
    Iva:<input type="text" name="ivas_id" value="<?php if(isset($servico)) { echo $servico->ivas_id; }?>"><br>
    <br>
    <input type="submit" class="btn btn-info" value="OK">
    <a href="index.php?c=servico&a=index" class="btn btn-danger" role="button">Cancel</a>
</form>
