<h2 class="text-left top-space">User Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>email</h3>
            </th><th><h3>nif</h3></th><th><h3>role</h3></th><th><h3>telefone</h3></th><th><h3>morada</h3></th><th><h3>codigo Postal</h3></th>
            <th><h3>localidade</h3></th><th><h3>User Actions</h3></th></thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->nif ?></td>
                    <td><?=$user->role ?></td>
                    <td><?=$user->telefone ?></td>
                    <td><?=$user->morada ?></td>
                    <td><?=$user->codigopostal ?></td>
                    <td><?=$user->localidade ?></td>
                    <td>
                        <a href="index.php?c=user&a=show&id=<?=$user->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=user&a=edit&id=<?=$user->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=user&a=delete&id=<?=$user->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="col-sm-6">
            <h3>Create a new user</h3>
            <p>
                <a href="index.php?c=user&a=create" class="btn btn-info" role="button">New</a>
            </p>
        </div>
    </div>
</div><!-- /row -->
