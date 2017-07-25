 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-10">
        <h1 class="page-header">Alterar Usuario</h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url() ?>/index.php/Usuario/salvar_alteracao" method="post">
            
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text"  class="form-control" id="nome" name="nome" value="<?= $usuario[0]->nome; ?>" required>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="data_nascimento">Data de Nascimento</label>
                        <input type="date"  class="form-control" id="data_nascimento" name="data_nascimento" value="<?= $usuario[0]->data_nascimento; ?>" required>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel"  class="form-control" id="telefone" name="telefone" value="<?= $usuario[0]->telefone; ?>" required>
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="status">Status</label>
                    <select id="status" class="form-control" name="status"   required>
                        <option value="1" <?= $usuario[0]->status==1?' selected ':'' ?> >Ativo</option>
                        <option value="2" <?= $usuario[0]->status==2?' selected ':'' ?> >Inativo</option>
                    </select>
                </div>
            </div>
            
             <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text"  class="form-control" id="cep" name="cep" value="<?= $usuario[0]->cep; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text"  class="form-control" id="rua" name="rua" value="<?= $usuario[0]->rua; ?>" required>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="numero">Numero</label>
                        <input type="text"  class="form-control" id="numero" name="numero" value="<?= $usuario[0]->numero; ?>" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text"  class="form-control" id="bairro" name="bairro" value="<?= $usuario[0]->bairro; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text"  class="form-control" id="cidade" name="cidade" value="<?= $usuario[0]->cidade; ?>" required>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="uf">Estado</label>
                        <input type="text"  class="form-control" id="uf" name="uf" value="<?= $usuario[0]->uf; ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="biografia">Biografia</label>
                <textarea class="form-control" id="biografia" name="biografia"><?= $usuario[0]->biografia; ?></textarea>
            </div>

            <div style="text-align: right">
                <div class="col-md-8">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary btn-block" href="<?= base_url() ?>/index.php/Usuario"> Voltar </a>
                </div>
            </div>

        </form>
    </div>

</div>
</div>
</div>
