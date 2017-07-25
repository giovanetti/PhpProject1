<?php

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['data_nascimento'] = $this->input->post('data_nascimento');
        $data['telefone'] = $this->input->post('telefone');
        $data['status'] = $this->input->post('status');
        $data['cep'] = $this->input->post('cep');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['uf'] = $this->input->post('uf');
        $data['biografia'] = $this->input->post('biografia');

        return($this->db->insert('usuario', $data));
    }

    public function excluir($id = null) {
        /* $this->db->where('idUsuario',$id);

          if($this->db->delete('usuario'))
          {
          redirect('Usuario/3');
          }
          else {
          redirect('Usuario/4');
          } */
        $this->db->select('status');
        $this->db->where('idUsuario', $id);
        $data['status'] = 2;
        return($this->db->update('usuario', $data));
    }

    public function salvar_alteracao() {
        $id = $this->input->post('idUsuario');
        $data['nome'] = $this->input->post('nome');
        $data['data_nascimento'] = $this->input->post('data_nascimento');
        $data['telefone'] = $this->input->post('telefone');
        $data['status'] = $this->input->post('status');
        $data['cep'] = $this->input->post('cep');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['uf'] = $this->input->post('uf');
        $data['biografia'] = $this->input->post('biografia');

        $this->db->where('idUsuario', $id);
        return($this->db->update('usuario', $data));
    }

    public function get_usuarios() {
        $this->db->select('*');
        return($this->db->get('usuario')->result());
    }
    
    public function visualizar($id=null)
    {
        $this->db->where('idUsuario', $id);
        return($this->db->get('usuario')->result());

    }
    
    public function alterar($id=null)
    {
        $this->db->where('idUsuario', $id);
        return($this->db->get('usuario')->result());
    }

}
