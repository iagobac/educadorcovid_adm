<?php

class inscricao_model extends CI_Model {

    public function get_inscricoes($value = 0) {
        if ($value == 'all') {

            $this->db->select('*')
                    ->from('inscricoes')
                    ->where('inscricoes.status', 1)
                    ->order_by('inscricoes.nome');
        } else if ($value == 'def') {

            $this->db->select('*')
                    ->from('inscricoes')
                    ->where('inscricoes.status', 1)
                    ->where('inscricoes.homolog_status', 1)
                    ->order_by('inscricoes.nome', 'ASC');
        } else if ($value == 'indef') {

            $this->db->select('*')
                    ->from('inscricoes')
                    ->where('inscricoes.status', 1)
                    ->where('inscricoes.homolog_status', 2)
                    ->order_by('inscricoes.nome', 'ASC');
        } else if ($value == 'pend') {

            $this->db->select('*')
                    ->from('inscricoes')
                    ->where('inscricoes.status', 1)
                    ->where('inscricoes.homolog_status', 0)
                    ->order_by('inscricoes.nome', 'ASC');
        }


        return $this->db->get()->result_array();
    }

    public function get_one_inscricao($id) {
        $this->db->select('*')
                ->from('inscricoes')
                ->where('inscricoes.status', 1)
                ->where('inscricoes.id', $id);

        return $this->db->get()->result()[0];
    }

    public function get_cad_info($cpf) {
        $this->db->select('p_nom_pessoa as nome, d_vlr_renda_media_fam as renda')
                ->from('cad_unico')
                ->where('cad_unico.p_num_cpf_pessoa', $cpf);

        return $this->db->get()->result()[0];
    }

    public function deferir_indeferir($dados) {
        return $this->db->set('homolog_status', $dados['homolog_status'])
                        ->set('homolog_motivo', $dados['motivo'])
                        ->where('id', $dados['id'])
                        ->update('inscricoes');
    }

}
