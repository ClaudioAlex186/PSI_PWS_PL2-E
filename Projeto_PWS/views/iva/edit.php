<h2 class="text-left top-space">user Iva</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div>
        <form action="index.php?c=iva&a=update&id=<?=$iva->id?>" method="post">
            Percentagem:<input type="text" name="percentagem" value="<?php if(isset($iva)) { echo $iva->percentagem; }?>"><br>
            Descricao:<input type="text" name="descricao" value="<?php if(isset($iva)) { echo $iva->descricao; }?>"><br>
            Vigor:<input type="text" name="vigor" value="<?php if(isset($iva)) { echo $iva->vigor; }?>"><br>
            <br>
            <input type="submit" class="btn btn-info" value="Update">
            <a href="index.php?c=iva&a=index" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div><!-- /row -->