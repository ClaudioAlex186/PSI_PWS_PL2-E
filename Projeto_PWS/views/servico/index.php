<h2 class="text-left top-space">Servico Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>email</h3>
            </th><th><h3>nif</h3></th><th><h3>role</h3></th><th><h3>User Actions</h3></th></thead>
            <tbody>
            <?php foreach ($servicos as $servico) { ?>
                <tr>
                    <td><?=$servico->id?></td>
                    <td><?=$servico->username?></td>
                    <td><?=$servico->email?></td>
                    <td><?= $servico->nif ?></td>
                    <td><?= $servico->role ?></td>
                    <td>
                        <a href="index.php?c=book&a=show&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=chapter&a=index&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Chapters</a>
                        <a href="index.php?c=book&a=edit&id=<?=$servico->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=book&a=delete&id=<?=$servico->id ?>"
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
