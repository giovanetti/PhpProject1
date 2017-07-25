<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Teste de PHP</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?= base_url() ?>/index.php">Tela Inicial <span class="sr-only">(current)</span></a></li>
                <li><a href="<?= base_url() ?>/index.php/Mensagem">Enviar Mensagem</a></li>
                <li><a href="<?= base_url() ?>/index.php/Usuario">Usuários</a></li>
            </ul>
        </div>