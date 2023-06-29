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
        <th>REF</th>
        <th>Descrição</th>
        <th>Preço/Hora</th>
        <th>Iva</th>
        <th>User Actions</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($servicos as $servico) { ?>
        <tr>
            <td><?=$servico->referencia?></td>
            <td><?=$servico->descricao?></td>
            <td><?=$servico->precohora?></td>
            <td><?=$servico->ivas_id?></td>
            <td><a href="index.php?c=linhaObra&a=create&idFolhaObra=<?=$fo->id ?>&idServico=<?=$servico->id ?>"
                   class="btn btn-info" role="button">Selecionar</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
