 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
    <div class="col-md-10">
        <h1 class="page-header">Usuários</h1>
    </div>
    
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>/index.php/Usuario/cadastro"> Novo Usuário </a>
    </div>
    
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
            
            <?php foreach($usuarios as $usuario) {?>
            <tr>
                <td><?= $usuario->idUsuario; ?></td>
                <td><?= $usuario->nome; ?></td>
                <td><?= $usuario->telefone; ?></td>
                <td><?= $usuario->status==1?'Ativo':'Inativo'; ?></td>
                <td>
                    <a href="<?= base_url('/index.php/Usuario/visualizar/' . $usuario->idUsuario) ?>" class="btn btn-primary btn-group">Visualizar</a>
                    <a href="<?= base_url('/index.php/Usuario/excluir/'.$usuario->idUsuario) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');">Remover</a>
                </td>
                
            </tr>
            <?php } ?>
        </table>
    </div>

</div>
</div>
</div>
