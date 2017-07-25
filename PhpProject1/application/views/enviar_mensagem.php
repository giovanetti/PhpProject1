 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-10">
        <h1 class="page-header">Enviar Mensagem</h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url('/index.php/Mensagem/enviar_msg/') ?>" method="post">
            <div class="form-group">
                <label for="emissor">Emissor</label>
                <select id="emissor" class="form-control" name="emissor" required>
                    <?php foreach($usuarios as $usuario) {?>
                    <option value="<?= $usuario->nome ?>"><?=$usuario->nome;?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
            </div>

            <div style="text-align: right">
                <div class="col-md-8">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Enviar Mensagem</button>
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
