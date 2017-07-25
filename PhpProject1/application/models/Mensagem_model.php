<?php

class Mensagem_model extends CI_Model {

    public function __construct() {
        
        parent::__construct();
    }

    public function salvar_mensagem() {
        $data['emissor'] = $this->input->post('emissor');
        $data['corpo_msg'] = $this->input->post('mensagem');
        $data['data'] = date('d/m/y');

        return($this->db->insert('mensagem', $data));
    }
    
    public function getMensagens()
    {
        $this->db->select('*');
        return($this->db->get('mensagem')->result());
    }
    
    public function visualizar($id=null)
    {
        $this->db->where('idMensagem', $id);
        return($this->db->get('mensagem')->result());
    }

}
