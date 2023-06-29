<h1>Criar novo user</h1>

<form action="index.php?c=iva&a=store" method="post">

    Percentagem:<input type="text" name="percentagem" value="<?php if(isset($iva)) { echo $iva->percentagem; }?>"><br>
    Descricao:<input type="text" name="descricao" value="<?php if(isset($iva)) { echo $iva->descricao; }?>"><br>
    Vigor:<input type="text" name="vigor" value="<?php if(isset($iva)) { echo $iva->vigor; }?>"><br>

    <br>
    <input type="submit" class="btn btn-info" value="OK">
    <a href="index.php?c=iva&a=index" class="btn btn-danger" role="button">Cancel</a>
</form>
