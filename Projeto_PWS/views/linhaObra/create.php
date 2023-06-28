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
                <a href="index.php?c=folhaObra&a=selectCliente"
                   type="button" class="btn btn-primary  btn-info" role="button" style="margin-right: 5px;">Selecionar</a>
                <strong></strong><br>
                <br>
                <br>
                <br>

            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Data: --</b><br>
            <b>Nº Folha de Obra: --</b>
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
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
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
                        <td>-€</td>
                    </tr>
                    <tr>
                        <th>Iva (-%)</th>
                        <td>-€</td>
                    </tr>
                    <tr>
                        <th>Total:</th>
                        <td>-€</td>
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