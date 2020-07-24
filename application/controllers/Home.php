<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AuthController {

    public function __construct() {
        parent::__construct();
        //$this->load->helper('url_helper');
        $this->status_servidor();
    }

    private function status_servidor() {
        if ($_SERVER['SERVER_NAME'] == "localhost") {
            $this->loadDevEnvironment();
        } else {
            $this->loadProdEnvironment();
        }
    }

    private function loadDevEnvironment() {
//        session_destroy();;

        //admin 2
        //sistema 1
        //secretario 4
        // gestor imovel 6
//        $_SESSION['user']['nome'] = 'SEC. MUNICIPAL DE EDUCAÇÃO';
//        $_SESSION['user']['educacrato']['level'] = '2';
        //$_SESSION['user']['educacrato']['level'] = '6';
        //secretaria
        //$GLOBALS['user_id'] = "11";
        //$_SESSION['user_id'] = "11";
        
                // ------ USUARIO GESTOR DA SECRETARIA DE EDUCAÇÃO --------
        $_SESSION['user']['nome'] = 'SEC. MUNICIPAL DE FINANÇAS E PLANEJAMENTO';
        $_SESSION['user']['educadorcovid']['level'] = '2';
        $_SESSION['user']['id'] = '101010';
////        
//        // ------ USUARIO GESTOR DA ESCOLA --------
//        $_SESSION['user']['nome'] = 'GESTOR ESCOLAR';
//        $_SESSION['user']['educacrato']['level'] = '6';
//        $_SESSION['user']['educacrato']['idUnidade'] = '0602028';
//        $_SESSION['user']['id'] = '0102010';
//        $_SESSION['id_global'] = $_SESSION['user']['educacrato']['idUnidade'];
        
//        //$_SESSION['user']['educacrato']['level'] = '6';
    }

    private function loadProdEnvironment() {
//        $_SESSION['user']['nome'] = 'SEC. MUNICIPAL DE FINANÇAS E PLANEJAMENTO';
//        $_SESSION['user']['informal']['level'] = '2';
//        $_SESSION['user']['id'] = '55055055';;
        
        if ($_SESSION['user']['educadorcovid']['level'] == 2) {
            $_SESSION['id_global'] = $_SESSION['user']['educadorcovid']['idSecretaria'];
        }

    }

    public function index() {

        $this->load->view('templates/headers/dependences');

        if ($_SESSION['user']['educadorcovid']['level'] == 2 || $_SESSION['user']['educadorcovid']['level'] == 1) {

            $this->load->view('templates/headers/admin');

            $this->load->view('templates/footers/admin');
        }

        if ($_SESSION['user']['educadorcovid']['level'] == 4) {

//            $this->load->view('templates/headers/secretaria');
//            $this->load->view('templates/footers/secretaria');
        }

        if ($_SESSION['user']['educadorcovid']['level'] == 5) {
//            $this->load->view('templates/headers/secretaria');
//            $this->load->view('templates/footers/secretaria');
        }

        if ($_SESSION['user']['educadorcovid']['level'] == 6) {
//            $this->load->view('templates/headers/escola');
//            $this->load->view('templates/footers/escola');
        }
    }

    public function content() {

        $this->load->view('pages/admin/home/home');
    }

    public function content_secretaria() {
        $this->load->helper('unidade');
        $user_id = $_SESSION['user_id'];

        $this->load->model('secretaria_model');
        $data['secretarias'] = $this->secretaria_model->get_entries();

        $this->load->model('unidade_model');
        $data['unidades'] = $this->unidade_model->get_entrie_user_secretaria($user_id);

        $this->load->view('pages/secretaria/home/home', $data);
    }

    public function content_unidade() {
        $this->load->helper('unidade');
        $user_id = $_SESSION['user_id'];

        $this->load->model('unidade_model');
        $unidade = $this->unidade_model->get_entrie_user_unidade($user_id);
        $data['unidade'] = $unidade;

        $this->load->model('secretaria_model');
        $data['secretaria'] = $this->secretaria_model->get_entrie_id($unidade->id_secretaria);

        $this->load->view('pages/unidade/home/home', $data);
    }

}
