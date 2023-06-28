<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Nome</th>
        <th>NIF</th>
        <th>User action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?=$user->username?></td>
            <td><?=$user->nif?></td>
            <td><a href="index.php?c=folhaObra&a=store&idCliente=<?=$user->id ?>"
                   class="btn btn-info" role="button">Selecionar</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
