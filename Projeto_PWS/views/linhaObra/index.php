<!-- Main content -->
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
        <div class="col-12">
            <h4>
                <i class="fas fa-globe"></i><?=APP_NAME ?>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            Empresa
            <address>
                <strong><?=APP_NAME ?></strong><br>
                <br>
                <br>
                <br>

            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            Cliente
            <address>
                <strong>Nome:<?=$client->username?></strong><br>
                <b>Email: <?=$client->email?></b><br>
                <b>Nif: <?=$client->nif?></b><br>

            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Data: <?=$fo->data?></b><br>
            <b>Nº Folha de Obra: <?=$fo->id?></b>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>REF</th>
                    <th>Descrição</th>
                    <th>QTD</th>
                    <th>Preço/Hora</th>
                    <th>Valor Iva</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <?php /*$lo->quantidade = 1;
                foreach ($servicos as $servico){ ?>
                    <tr>
                        <td><?=$servico->referencia?></td>
                        <td><?=$servico->descricao?></td>
                        <td><?$lo->quantidade ?></td>
                        <td><?=$servico->precohora?></td>
                        <td><?=$servico->ivas_id?></td>
                        <td><?$servico->subtotal ?></td>
                    </tr>
                <?php } */?>
                </tbody>
            </table>
            <form action="index.php?c=linhaObra&a=selectServico&idFolhaObra=<?=$fo->id?>" method="POST">
                <div class="row">
                    <div class="col-2">
                        <input type="text" class="form-control" placeholder="REF">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary btn-block">Select</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="public/img/credit/visa.png" alt="Visa">
            <img src="public/img/credit/mastercard.png" alt="Mastercard">
            <img src="public/img/credit/american-express.png" alt="American Express">
            <img src="public/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                plugg
                dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
        </div>
        <!-- /.col -->
        <div class="col-6">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>--€</td>
                    </tr>
                    <tr>
                        <th>Iva (-%)</th>
                        <td><?=$fo->ivatotal?>€</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td><?=$fo->valortotal?>€</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-12">
            <button type="button" class="btn btn-success float-right btn-info"><i class="far fa-credit-card"></i> Emitir
            </button>
            <button type="button" class="btn btn-primary float-right btn-danger" style="margin-right: 5px;">Cancelar
            </button>
        </div>
    </div>
</div>
<!-- /.invoice -->