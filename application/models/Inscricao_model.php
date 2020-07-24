<?php

class inscricao_model extends CI_Model {

    public function get_inscricoes($value = 0) {
        if ($value == 'all') {

            $this->db->select('*')
                    ->from('inscricoes')
                    ->where('inscricoes.status', 1)
                    ->order_by(`inscricoes.nome`);
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


        return $this->db->get()->result();
    }

    public function get_one_inscricao($id) {
        $this->db->select('*')
                ->from('inscricoes')
                ->where('inscricoes.status', 1)
                ->where('inscricoes.id', $id);

        return $this->db->get()->result();
    }

}
