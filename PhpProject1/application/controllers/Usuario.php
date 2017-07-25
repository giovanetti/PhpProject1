<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index($indice = null) {
        $this->load->model('Usuario_model', 'usuario');
        $dados['usuarios'] = $this->usuario->get_usuarios();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        if ($indice == 1) {
            $data['msg'] = "Usuario cadastrado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Nao foi possivel cadastrar o usuario.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Usuario excluido com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Nao foi possivel excluir o usuario.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Usuario alterado com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Nao foi possivel alterar o usuario.";
            $this->load->view('includes/msg_erro', $data);
        }

        $this->load->view('listar_usuario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_usuario');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {

        $this->load->model('Usuario_model', 'usuario');
        if ($this->usuario->cadastrar()) {
            redirect('Usuario/1');
        } else {
            redirect('Usuario/2');
        }
    }

    public function excluir($id = null) {
        $this->load->model('Usuario_model', 'usuario');

        if ($this->usuario->excluir($id)) {
            redirect('Usuario/5');
        } else {
            redirect('Usuario/6');
        }
    }

    public function visualizar($id = null) {
        $this->load->model('Usuario_model','usuario');
        $dados['usuario'] = $this->usuario->visualizar($id);
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('visualizar_usuario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function alterar($id = null) {
        $this->load->model('Usuario_model', 'usuario');
        $dados['usuario'] = $this->usuario->alterar($id);

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('alterar_usuario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function salvar_alteracao() {
        $this->load->model('Usuario_model', 'usuario');
        if ($this->usuario->salvar_alteracao()) {
            redirect('Usuario/5');
        } else {
            redirect('Usuario/6');
        }
    }

}
