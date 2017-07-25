<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mensagem extends CI_Controller {

    public function index($indice = null) {
        $this->load->model('Usuario_model', 'usuario');
        $dados['usuarios'] = $this->usuario->get_usuarios();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Mensagem enviada com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Nao foi possivel enviar a mensagem.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('enviar_mensagem', $dados);
        $this->load->view('includes/html_footer');
    }

    public function enviar_msg() {
        $this->load->model('Mensagem_model', 'mensagem');
        if ($this->mensagem->salvar_mensagem()) {
            redirect('Mensagem/getMensagens');
        } else {
            redirect('Mensagem/2');
        }
    }

    public function getMensagens() {
        $this->load->model('Mensagem_model', 'mensagem');
        $dados['mensagens'] = $this->mensagem->getMensagens();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('listar_mensagem', $dados);
        $this->load->view('includes/html_footer');
    }

    public function visualizar($id = null) {
        $this->load->model('Mensagem_model', 'mensagem');
        $dados['mensagem'] = $this->mensagem->visualizar($id);

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('visualizar_mensagem', $dados);
        $this->load->view('includes/html_footer');
    }

}
