<h2 class="text-left top-space">user Edit</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div>
        <form action="index.php?c=user&a=update&id=<?=$user->id?>" method="post">
            Username:<input type="text" name="username" value="<?php if(isset($user)) { echo $user->name; }?>"><br>
            Password:<input type="password" name="password" value="<?php if(isset($user)) { echo $user->pasword; }?>"><br>
            Email:<input type="email" name="email" value="<?php if(isset($user)) { echo $user->email; }?>"><br>
            Nif:<input type="text" name="nif" value="<?php if(isset($user)) { echo $user->nif; }?>"><br>
            Role:<input type="text" name="role" value="<?php if(isset($user)) { echo $user->role; }?>"><br>
            Telefone:<input type="text" name="telefone" value="<?php if(isset($user)) { echo $user->telefone; }?>"><br>
            Morada:<input type="text" name="morada" value="<?php if(isset($user)) { echo $user->morada; }?>"><br>
            Codigo Postal:<input type="text" name="codigopostal" value="<?php if(isset($user)) { echo $user->codipostal; }?>"><br>
            Localidade:<input type="text" name="localidade" value="<?php if(isset($user)) { echo $user->localidade; }?>"><br>
            <br>
            <input type="submit" class="btn btn-info" value="Update">
            <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div><!-- /row -->