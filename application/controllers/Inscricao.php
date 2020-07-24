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
//
//        $data['serie'] = $this->inscricao_model->get_all_info('serie');
//        $data['semana'] = $this->inscricao_model->get_all_info('semana_aula');
//        $data['tipo_inscricao'] = $this->inscricao_model->get_all_info('inscricao_tipo');
//        $data['inscricao'] = $this->inscricao_model->get_all_inscricao();
    }

    public function listar_todas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('all');
        $data['inscricoes_tipo'] = 'all';
        $this->load->view('pages/inscricao/inscricao', $data);
    }

    public function listar_pendentes() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('pend');
        $data['inscricoes_tipo'] = 'pend';
        $this->load->view('pages/inscricao/inscricao', $data);
    }

    public function listar_deferidas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('def');
        $data['inscricoes_tipo'] = 'def';
        $this->load->view('pages/inscricao/inscricao', $data);
    }

    public function listar_indeferidas() {
        $data['inscricoes'] = $this->inscricao_model->get_inscricoes('indef');
        $data['inscricoes_tipo'] = 'indef';
        $this->load->view('pages/inscricao/inscricao', $data);
    }

    public function salvar_inscricao() {
        $dados = $this->input->post();

        if ($dados['inscricao_tipo'] == 1) {
            $config = array();
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx';
            $config['max_size'] = '20000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            if (!$this->upload->do_upload('inscricao_arquivo')) {
                $retorno = array('status' => 0, 'mensagem' => $this->upload->display_errors());
            } else {

                $dadosArquivo = $this->upload->data();
                $partesArquivo = explode(".", $dadosArquivo['file_name']);
                $novoNomeArquivo = 'inscricao_' . md5(time()) . "." . $partesArquivo[1];
                rename('./uploads/' . $dadosArquivo['file_name'], './uploads/' . $novoNomeArquivo);
                $dados['inscricao_file_link'] = $novoNomeArquivo;

                if ($this->inscricao_model->salvar_inscricao($dados)) {
                    $retorno = array('status' => 1, 'mensagem' => mensagem_sucesso('salvar'));
                } else {
                    $retorno = array('status' => 0, 'mensagem' => mensagem_erro('banco'));
                }
            }
        } else {
            if ($this->inscricao_model->salvar_inscricao($dados)) {
                $retorno = array('status' => 1, 'mensagem' => mensagem_sucesso('salvar'));
            } else {
                $retorno = array('status' => 0, 'mensagem' => mensagem_erro('banco'));
            }
        }
        echo json_encode($retorno);
    }

    public function tabela_inscricao() {
        $data['inscricao'] = $this->inscricao_model->get_all_inscricao();
        $this->load->view('pages/inscricao/tabela_inscricao', $data);
    }

    public function get_one_inscricao() {
        $id = $this->input->post('id');
        $inscricao = $this->inscricao_model->get_one_inscricao($id);

        if ($inscricao) {
            $retorno = array('status' => 1, 'inscricao' => $inscricao);
        } else {
            $retorno = array('status' => 0, 'mensagem' => mensagem_erro('get_dados'));
        }
        echo json_encode($retorno);
    }


}
