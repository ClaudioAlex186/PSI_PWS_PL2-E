<h1>Criar novo user</h1>

<form action="index.php?c=user&a=store" method="post">

    Nome:<input type="text" name="name" value="<?php if(isset($user)) { echo $user->name; }?>"><br>
    <?php if(isset($user->errors)){ echo $user->errors->on('name'); }?><br>
    ISBN:<input type="text" name="isbn" value="<?php if(isset($user)) { echo $user->isbn; }?>"><br>
    <?php if(isset($user->errors)) {
        if (is_array($user->errors->on('isbn'))) {
            foreach ($user->errors->on('isbn') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('isbn');
        }
    }
    ?>
    <br>
    <input type="submit" class="btn btn-info" value="OK">
    <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">Cancel</a>
</form>
