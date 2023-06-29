<h1>Criar novo user</h1>

<form action="index.php?c=user&a=store" method="post">

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
    <input type="submit" class="btn btn-info" value="OK">
    <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">Cancel</a>
</form>
