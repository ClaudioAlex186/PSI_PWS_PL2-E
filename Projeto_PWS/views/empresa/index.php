<h2 class="text-left top-space">Empresa Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped"><thead><th><h3>Designação Social</h3></th><th><h3>Email</h3></th><th><h3>Telefone</h3>
            </th><th><h3>nif</h3></th><th><h3>morada</h3></th><th><h3>codigo postal</h3></th><th><h3>localidade</h3></th>
            <th><h3>Capital Social</h3></th><th><h3>User Actions</h3></th></thead>
            <tbody>
            <?php foreach ($empresas as $empresa) { ?>
                <tr>
                    <td><?=$empresa->designacaosocial?></td>
                    <td><?=$empresa->email?></td>
                    <td><?=$empresa->telefone?></td>
                    <td><?=$empresa->nif?></td>
                    <td><?= $empresa->morada ?></td>
                    <td><?= $empresa->codigopostal ?></td>
                    <td><?= $empresa->localidade ?></td>
                    <td><?= $empresa->capitalsocial ?></td>

                    <td>
                        <a href="index.php?c=empresa&a=show&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=empresa&a=edit&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Edit</a>

                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div><!-- /row -->
