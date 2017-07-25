 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-10">
        <h1 class="page-header">Visualizar Mensagem</h1>
    </div>

    <div class="col-md-12">
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="emissor">Emissor</label>
                        <input type="text" readonly="true" class="form-control" id="emissor" name="emissor" value="<?= $mensagem[0]->emissor; ?>" >
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="data">Data Criação</label>
                        <input type="text" readonly="true" class="form-control" id="data" name="data" value="<?= $mensagem[0]->data; ?>" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" readonly="true" id="mensagem" name="mensagem"> <?= $mensagem[0]->corpo_msg; ?> </textarea>
            </div>

            <div style="text-align: right">
                <div class="col-md-8">
                </div>
                <div class="col-md-2">
                   
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary btn-block" href="<?= base_url() ?>/index.php/Mensagem"> Voltar </a>
                </div>

            </div>

        </form>
    </div>

</div>
</div>
</div>
