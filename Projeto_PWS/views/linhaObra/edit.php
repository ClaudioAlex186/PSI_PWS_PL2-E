<h2 class="text-left top-space">user Edit</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div>
        <form action="index.php?c=user&a=update&id=<?=$user->id?>" method="post">
            ID:<?=$user->id?><br>
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
            ?><br>
            <input type="submit" class="btn btn-info" value="Update">
            <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">Cancel</a>
        </form>
    </div>
</div><!-- /row -->