<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AuthController {
//
//    public function __construct() {
//        parent::__construct();
//        $this->load->helper('url_helper');
//        //$this->loadDevEnvironment();
//        $this->loadProdEnvironment();
//
//        $this->load->model('secretaria_model');
//    }
//
//    private function loadDevEnvironment() {
//        //admin 2
//        //sistema 1
//        //secretario 4
//        // gestor imovel 6
//
//        $_SESSION['user']['educacrato']['level'] = '4';
//        //secretaria
//        //$GLOBALS['user_id'] = "11";
//        $_SESSION['user_id'] = "11";
//
//        //imovel
//        //$GLOBALS['user_id'] = "275";
//        //$_SESSION['user_id'] = "275";
//    }
//
//    private function loadProdEnvironment() {
//        // GESTOR DA SECRETARIA
//        if ($_SESSION['user']['educacrato']['level'] == 4) {
//            $_SESSION['user_id'] = $_SESSION['user']['educacrato']['idSecretaria'];
//            //var_dump($_SESSION);
//            //$GLOBALS['user_id'] = $_SESSION['user']['educacrato']['idSecretaria'];
//        }
//        //GESTOR DA UNIDADE ESCOLAR
//        if ($_SESSION['user']['educacrato']['level'] == 6) {
//            $_SESSION['user_id'] = $_SESSION['user']['educacrato']['idUnidade'];
//            // $GLOBALS['user_id'] =  $_SESSION['user']['educacrato']['idUnidade'];
//        }
//
//        //DIRETOR - PARA VISUALIZAR ESCOLAS SEM PODER EDITAR
////        if($_SESSION['user']['educacrato']['level'] == 6){
////            $_SESSION['user_id'] =  $_SESSION['user']['educacrato']['idUnidade'];
////           // $GLOBALS['user_id'] =  $_SESSION['user']['educacrato']['idUnidade'];
////        }
//    }
//
//    public function index() {
//
//        $this->load->view('templates/headers/dependences');
//        if ($_SESSION['user']['educacrato']['level'] == 2) {
//            $this->load->view('templates/headers/admin');
//            $this->load->view('templates/footers/admin');
//        }
//        if ($_SESSION['user']['educacrato']['level'] == 4) {
//            $this->load->view('templates/headers/secretaria');
//            $this->load->view('templates/footers/secretaria');
//        }
//        if ($_SESSION['user']['educacrato']['level'] == 6) {
//            $this->load->view('templates/headers/unidade');
//            $this->load->view('templates/footers/unidade');
//        }
//    }
//
//    public function cadastrar() {
//
//        $this->load->model('unidade_model');
//        $dados = $this->input->post();
//
//
//        if ($dados['id_agrupamento_enel'] == "") {
//            $dados['id_agrupamento_enel'] = 0;
//        } else {
//            if (isset($dados["venc_enel"])) {
//                $dados["venc_enel"] = "";
//            }
//        }
//
//        if ($dados['id_agrupamento_saaec'] == "") {
//            $dados['id_agrupamento_saaec'] = 0;
//        } else {
//            if (isset($dados["venc_saaec"])) {
//                $dados["venc_saaec"] = "";
//            }
//        }
//
//        $retorno = $this->unidade_model->insert_entry($dados);
//
//        echo json_encode($retorno);
//    }
//
//    public function editar() {
//
//        $this->load->model('unidade_model');
//        $dados = $this->input->post();
//
//        /*
//
//          if($dados['id_agrupamento_enel'] == ""){
//          $dados['id_agrupamento_enel'] = 0;
//          }
//          if($dados['id_agrupamento_saaec'] == ""){
//          $dados['id_agrupamento_saaec'] = 0;
//          }
//         */
//
//        if ($dados['id_agrupamento_enel'] == "") {
//            $dados['id_agrupamento_enel'] = 0;
//        } else {
//            if (isset($dados["venc_enel"])) {
//                $dados["venc_enel"] = "";
//            }
//        }
//
//        if ($dados['id_agrupamento_saaec'] == "") {
//            $dados['id_agrupamento_saaec'] = 0;
//        } else {
//            if (isset($dados["venc_saaec"])) {
//                $dados["venc_saaec"] = "";
//            }
//        }
//
//
//        $retorno = $this->unidade_model->update_entry($dados);
//
//        echo json_encode($retorno);
//    }
//
//    public function tabela_unidade() {
//
//        $this->load->helper('unidade');
//        $this->load->model('unidade_model');
//        $data['unidades'] = $this->unidade_model->get_entries();
//
//        $this->load->model('secretaria_model');
//        $data['secretarias'] = $this->secretaria_model->get_entries();
//
//        $this->load->model('agrupamento_model');
//
//        //$data['agrupamentos']=$this->agrupamento_model->get_entries_status_show();
//        $data['agrupamentos'] = $this->agrupamento_model->get_entries();
//
//        $this->load->view('pages/admin/home/tabela_unidade', $data);
//    }
//
//    public function getUnidade() {
//
//        //echo json_encode($_POST['id']);
//
//
//        $this->load->model('unidade_model');
//        $unidade = $this->unidade_model->get_entrie_id($_POST['id']);
//
//        $this->load->model('agrupamento_model');
//
//        if (!($unidade->id_agrupamento_enel == 0)) {
//            $id_agrupamento_enel = $this->agrupamento_model->get_entrie_id($unidade->id_agrupamento_enel);
//            $unidade->venc_enel = $id_agrupamento_enel->vencimento;
//        }
//
//        if (!($unidade->id_agrupamento_saaec == 0)) {
//            $id_agrupamento_saaec = $this->agrupamento_model->get_entrie_id($unidade->id_agrupamento_saaec);
//            $unidade->venc_saaec = $id_agrupamento_saaec->vencimento;
//        }
//
//        echo json_encode($unidade);
//    }
//
//    public function getUnidade_detalhes() {
//
//        $dados = $this->input->post();
//
//
//        $this->load->model('unidade_model');
//        $unidade = $this->unidade_model->get_entrie_id($dados['id']);
//
//        $this->load->model('secretaria_model');
//        $secretaria = $this->secretaria_model->get_entrie_id($unidade->id_secretaria);
//        $unidade->id_secretaria = $secretaria->secretaria;
//
//
//        if ($unidade->id_agrupamento_enel != 0) {
//            $this->load->model('agrupamento_model');
//            $agrupamento_enel = $this->agrupamento_model->get_entrie_id($unidade->id_agrupamento_enel);
//            $unidade->id_agrupamento_enel = $agrupamento_enel->codigo;
//            $unidade->venc_enel = $agrupamento_enel->vencimento;
//        } else {
//            $unidade->id_agrupamento_enel = "Nenhum";
//        }
//
//        if ($unidade->id_agrupamento_saaec != 0) {
//            $agrupamento_saaec = $this->agrupamento_model->get_entrie_id($unidade->id_agrupamento_saaec);
//            $unidade->id_agrupamento_saaec = $agrupamento_saaec->codigo;
//            $unidade->venc_saaec = $agrupamento_saaec->vencimento;
//        } else {
//            $unidade->id_agrupamento_saaec = "Nenhum";
//        }
//
//        if ($unidade->id_imovel != 0) {
//            $this->load->model('imovel_model');
//            $imovel = $this->imovel_model->get_entrie_id($unidade->id_imovel);
//            $unidade->id_imovel = $imovel->ins_cad_imobiliario;
//            if ($imovel->rua != "") {
//                $unidade->id_imovel .= ", " . $imovel->rua;
//            }
//            if ($imovel->numero_rua != "") {
//                $unidade->id_imovel .= ", " . $imovel->numero_rua;
//            }
//            if ($imovel->bairro != "") {
//                $unidade->id_imovel .= ", " . $imovel->bairro;
//            }
//
//            $unidade->id_imovel .= ". ";
//
//            if ($imovel->latitude != "" || $imovel->longitude != "") {
//                $unidade->id_imovel .= "Coordenadas: ";
//                if ($imovel->latitude != "") {
//                    $unidade->id_imovel .= "Latitude: " . $imovel->latitude;
//                }
//                if ($imovel->longitude != "") {
//                    $unidade->id_imovel .= ", Longitude: " . $imovel->longitude;
//                }
//            }
//        } else {
//            $unidade->id_imovel = "NÃO INFORMADO";
//        }
//
//        echo json_encode($unidade);
//    }
//
//    public function selectAgrupamento() {
//
//        $this->load->model('agrupamento_model');
//        $dados = $this->input->post();
//
//
//        if ($_POST['tipo'] == 1) {
//            $unidade = $this->agrupamento_model->get_entrie_id($_POST['id']);
//        }
//        if ($_POST['tipo'] == 2) {
//            $unidade = $this->agrupamento_model->get_entrie_id($_POST['id']);
//        }
//
//
//        echo json_encode($unidade);
//        //echo json_encode($unidade);
//    }
//
//    public function selectImovel() {
//
//        $this->load->model('imovel_model');
//        $retornos = $this->imovel_model->get_entries();
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            $select .= '<option value=  ' . $retorno->id . '>' . $retorno->ins_cad_imobiliario . ' - ' . $retorno->descricao . '</option>';
//        }
//
//        echo $select;
//    }
//
//    public function arquivar() {
//
//        $this->load->model('unidade_model');
//        $status = $this->unidade_model->arquivar($_POST['idExcluirUnidade']);
//
//        echo json_encode($status);
//    }
//
//    public function getFonteRecurso() {
//
//        $this->load->model('fonte_recurso_model');
//        $retornos = $this->fonte_recurso_model->get_entries();
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            $select .= '<option value=  ' . $retorno->id . '>' . $retorno->descricao . '</option>';
//        }
//
//        echo $select;
//    }
//
//    public function getAgruSaaec() {
//
//        $this->load->model('agrupamento_model');
//        $retornos = $this->agrupamento_model->get_entries_tipo(2);
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            $select .= '<option value=  ' . $retorno->id . '>' . $retorno->codigo . '</option>';
//        }
//
//        echo $select;
//    }
//
//    public function getAgruSaaec_cad() {
//
//        $this->load->model('agrupamento_model');
//        $retornos = $this->agrupamento_model->get_entries_tipo(2);
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            if ($retorno->status == 0) {
//                $select .= '<option value=  ' . $retorno->id . '>' . $retorno->codigo . '</option>';
//            }
//        }
//
//        echo $select;
//    }
//
//    public function getAgruEnel() {
//
//        $this->load->model('agrupamento_model');
//        $retornos = $this->agrupamento_model->get_entries_tipo(1);
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            $select .= '<option value=  ' . $retorno->id . '>' . $retorno->codigo . '</option>';
//        }
//
//        echo $select;
//    }
//
//    public function getAgruEnel_cad() {
//
//        $this->load->model('agrupamento_model');
//        $retornos = $this->agrupamento_model->get_entries_tipo(1);
//
//        $select = "<option value=''>Selecione...</option>";
//        foreach ($retornos as $retorno) {
//            if ($retorno->status == 0) {
//                $select .= '<option value=  ' . $retorno->id . '>' . $retorno->codigo . '</option>';
//            }
//        }
//
//        echo $select;
//    }
//
//    public function content() {
//        $this->load->helper('unidade');
//
//        $this->load->model('secretaria_model');
//        $data['secretarias'] = $this->secretaria_model->get_entries();
//
//        $this->load->model('unidade_model');
//        $data['unidades'] = $this->unidade_model->get_entries();
//
//        $this->load->model('agrupamento_model');
//
//        /*
//          if($data['agrupamentos_enel']!=0){
//          $agrup = $this->agrupamento_model->get_entrie_id($data['agrupamentos_enel']);
//          $data['venc_enel'] = $agrup->vencimento;
//          }
//          if($data['agrupamentos_saaec']!=0){
//          $agrup = $this->agrupamento_model->get_entrie_id($data['agrupamentos_saaec']);
//          $data['venc_saaec'] = $agrup->vencimento;
//          }
//         */
//
//        //$data['agrupamentos_enel']=$this->agrupamento_model->get_entries_tipo(1);
//        //$data['agrupamentos_saaec']=$this->agrupamento_model->get_entries_tipo(2);
//
//        $data['agrupamentos'] = $this->agrupamento_model->get_entries_status_show();
//
//        $this->load->view('pages/admin/home/home', $data);
//    }
//
//    public function atualizarModalCad() {
//        $this->load->view('pages/admin/home/home/modal_cadastrar.php');
//    }
//
//    public function atualizarModalEdit() {
//        $this->load->view('pages/admin/home/home/modal_cadastrar.php');
//    }
//
//    public function content_secretaria() {
//
//        $this->load->helper('unidade');
//        $user_id = $_SESSION['user_id'];
//
//        $this->load->model('secretaria_model');
//        $data['secretarias'] = $this->secretaria_model->get_entries();
//
//        $this->load->model('unidade_model');
//        $data['unidades'] = $this->unidade_model->get_entrie_user_secretaria($user_id);
//
//        $this->load->view('pages/secretaria/home/home', $data);
//    }
//
//    public function content_unidade() {
//        $this->load->helper('unidade');
//        $user_id = $_SESSION['user_id'];
//
//        /*
//          $this->load->model('secretaria_model');
//          $data['secretarias']= $this->secretaria_model->get_entries();
//         */
//
//        $this->load->model('unidade_model');
//        $unidade = $this->unidade_model->get_entrie_user_unidade($user_id);
//        $data['unidade'] = $unidade;
//
//        $this->load->model('secretaria_model');
//        $data['secretaria'] = $this->secretaria_model->get_entrie_id($unidade->id_secretaria);
//
//        $this->load->view('pages/unidade/home/home', $data);
//    }

}
