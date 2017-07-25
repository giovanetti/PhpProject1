 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
    <div class="col-md-10">
        <h1 class="page-header">Mensagens</h1>
    </div>
    
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Emissor</th>
                <th>Mensagem</th>
                <th>Data</th>
                <th></th>
            </tr>
            
            <?php foreach($mensagens as $mensagem) {?>
            <tr>
                <td><?= $mensagem->idMensagem ?></td>
                <td><?= $mensagem->emissor; ?></td>
                <td><?= $mensagem->corpo_msg; ?></td>
                <td><?= $mensagem->data; ?></td>
                <td>
                    <a href="<?= base_url('/index.php/Mensagem/visualizar/'.$mensagem->idMensagem) ?>" class="btn btn-primary btn-group">Visualizar</a>
                </td>
                
            </tr>
            <?php } ?>
        </table>
    </div>

</div>
</div>
</div>
