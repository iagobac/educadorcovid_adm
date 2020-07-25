<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends AuthController {

    public function __construct() {
        parent::__construct();
        $this->load->helper('inscricao');
        $this->load->model('inscricao_model');
//        $this->load->library('form_validation');
    }

    public function index() {

//        $data['serie'] = $this->inscricao_model->get_all_info('serie');
//        $data['semana'] = $this->inscricao_model->get_all_info('semana_aula');
//        $data['tipo_inscricao'] = $this->inscricao_model->get_all_info('inscricao_tipo');
//        $data['inscricao'] = $this->inscricao_model->get_all_inscricao();
    }

    public function listar_todas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('all');
        foreach ($data['inscricoes'] as $insc=>$chave){
            echo '<pre>';print_r($chave);
            $data['inscricoes'][$insc] = cvt_data_br($chave['dt_nascimento']);
        }
        $data['inscricoes_tipo'] = 'all';
        $this->load->view('pages/inscricao/inscricao_todas', $data);
    }

    public function listar_pendentes() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('pend');
        $data['inscricoes_tipo'] = 'pend';
        $this->load->view('pages/inscricao/inscricao_pendente', $data);
    }

    public function listar_deferidas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('def');
        $data['inscricoes_tipo'] = 'def';
        $this->load->view('pages/inscricao/inscricao_deferida', $data);
    }

    public function listar_indeferidas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('indef');
        $data['inscricoes_tipo'] = 'indef';
        $this->load->view('pages/inscricao/inscricao_indeferida', $data);
    }

    public function deferir_indeferir_inscricao() {
        $dados = $this->input->post();
        if ($this->inscricao_model->deferir_indeferir($dados)) {
            $retorno = array('status' => 1, 'mensagem' => mensagem_sucesso('salvar'));
        } else {
            $retorno = array('status' => 0, 'mensagem' => mensagem_erro('banco'));
        }
        echo json_encode($retorno);
    }

    public function tabela_todas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('all');
        $this->load->view('pages/inscricao/tabela_Inscricao_todas', $data);
    }

    public function tabela_pendentes() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('pend');
        $this->load->view('pages/inscricao/tabela_Inscricao_pendentes', $data);
    }

    public function tabela_def() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('def');
        $this->load->view('pages/inscricao/tabela_Inscricao_deferidas', $data);
    }

    public function tabela_indef() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('indef');
        $this->load->view('pages/inscricao/tabela_Inscricao_indeferidas', $data);
    }

    public function get_one_inscricao() {
        $id = $this->input->post('id');
        $inscricao = $this->inscricao_model->get_one_inscricao($id);

        if ($inscricao->cadunico == 1) {
            $cad = $this->inscricao_model->get_cad_info($inscricao->cpf);
        } else {
            $cad = 0;
        }
        $inscricao->id = str_pad($inscricao->id, 7, '0', STR_PAD_LEFT);

        if ($inscricao) {
            $retorno = array('status' => 1, 'inscricao' => $inscricao, 'cad' => $cad);
        } else {
            $retorno = array('status' => 0, 'mensagem' => mensagem_erro('get_dados'));
        }
        echo json_encode($retorno);
    }

}
