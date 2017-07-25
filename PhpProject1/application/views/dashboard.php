 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Tela Inicial</h1>

    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">

            <style type="text/css">

                ::selection { background-color: #E13300; color: white; }
                ::-moz-selection { background-color: #E13300; color: white; }

                body {
                    background-color: #fff;
                    margin: 40px;
                    font: 13px/20px normal Helvetica, Arial, sans-serif;
                    color: #4F5155;
                }

                a {
                    color: #003399;
                    background-color: transparent;
                    font-weight: normal;
                }

                h1 {
                    color: #444;
                    background-color: transparent;
                    border-bottom: 1px solid #D0D0D0;
                    font-size: 19px;
                    font-weight: normal;
                    margin: 0 0 14px 0;
                    padding: 14px 15px 10px 15px;
                }

                code {
                    font-family: Consolas, Monaco, Courier New, Courier, monospace;
                    font-size: 12px;
                    background-color: #f9f9f9;
                    border: 1px solid #D0D0D0;
                    color: #002166;
                    display: block;
                    margin: 14px 0 14px 0;
                    padding: 12px 10px 12px 10px;
                }

                #body {
                    margin: 0 15px 0 15px;
                }

                p.footer {
                    text-align: right;
                    font-size: 11px;
                    border-top: 1px solid #D0D0D0;
                    line-height: 32px;
                    padding: 0 10px 0 10px;
                    margin: 20px 0 0 0;
                }

                #container {
                    margin: 10px;
                    border: 1px solid #D0D0D0;
                    box-shadow: 0 0 8px #D0D0D0;
                }
            </style>
        </head>
        <body>

            <div id="container">
                <h1>Bem vindo!</h1>

                <div id="body">
                    <p>Esta aplicação WEB é um projeto que foi desenvolvido para um teste pŕatico em PHP,
                        utilizando o padrão de projeto MVC (Model-View-Controller).</p>

                    <p>Veja que ao lado esquerdo há duas opções de navegação. A primeira é um formulário para enviar uma mensagem
                        para o banco de dados, onde há um dropdownlist com os usuários cadastrados, sendo para selecionar o emissor. E também
                        um espaço para a mensagem. Na segunda opção é um formulário para realizar o cadastro, visualização, e exclusão do usuário. Para
                        alterar um usuário há a opção no formulário de visualização.</p>

                    <p>Agora é só utilizar, observar e reportar erros.</p>

                    <p>Muito obrigado, segue a baixo informações sobre o Projeto:</p>
                    <div class="form-group">
                        <code>Versão do Produto: PhpProject1 1.0<br />
                            Desenvolvedor(es): Jacomo Giovanetti M. Neto<br />
                            Ferramentas: Php (CodeIgniter) + Bootstrap + viacep<br />
                            Banco de dados: MariaDB<br />
                            Este projeto foi desenvolvido utilizando a IDE NetBeans 8.2</code>
                    </div>
                </div>

                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>

        </body>
    </html>

</div>
</div>
</div>
