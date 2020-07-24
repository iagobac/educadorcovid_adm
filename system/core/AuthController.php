<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct() {

        $PATHS = array();

        $ADMINPATHS = array("home","inscricao");

        $GESTOR_SECRETARIA_PATHS = array("home","Series");
        
        $GESTOR_ESCOLAR_PATHS = array("home", 'Turma', 'Series');


        $PATHS['admin'] = $ADMINPATHS;
        $PATHS['gestor_secretaria'] = $GESTOR_SECRETARIA_PATHS;
        $PATHS['gestor_escolar'] = $GESTOR_ESCOLAR_PATHS;

        parent::__construct();

        // server should keep session data for AT LEAST 1 hour
        ini_set('session.gc_maxlifetime', 3600);

        // each client should remember their session id for EXACTLY 1 hour
        session_set_cookie_params(3600);
        session_start();
        $this->load->helper("url_helper");
        if ($_SERVER['SERVER_NAME'] != "localhost") {
            $this->redirectIfNoSession();
        }

        $this->checkPrivileges($PATHS);
    }

    public function api_autenticacao2($url) {
        $username = 'Adm';
        $password = 'Gestor';
        $process = curl_init();
        curl_setopt($process, CURLOPT_HTTPHEADER, array('Cache-Control: no-cache'));
        curl_setopt($process, CURLOPT_URL, $url);
        curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
        curl_setopt($process, CURLOPT_TIMEOUT, 300);
        curl_setopt($process, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($process);
        $httpcode = curl_getinfo($process, CURLINFO_HTTP_CODE);
        curl_close($process);
        $retorno = array();
        $retorno[0] = $httpcode;
        $retorno[1] = $json;
        return $retorno;
    }

    public function g_teste() {
        return 'g_teste';
    }

    public function getGestora() {
        $retorno = self::api_autenticacao2('http://177.137.168.202:8080/ss/gestor/twsorgao/lista/2018');
        if ($retorno[0] == 200) {
            $dados = json_decode(utf8_encode($retorno[1]), true);
            //return $retorno[1];
            return $dados;
            //return self::gerarSelectUnidadeAdm($dados);
        } else {
            return "erro";
        }
    }

    private function redirectIfNoSession() {
        if (!isset($_SESSION["user"]['educadorcovid'])) {
            redirect("https://webcrato.crato.ce.gov.br");
        }
    }

    private function endsWith($palavra, $parte) {
        $length = strlen($parte);

        return $length === 0 ||
                (substr($palavra, -$length) === $parte);
    }

    private function checkPrivileges($PATHS) {
        $level = $_SESSION['user']['educadorcovid']['level'];
        

        if ($level == "6") { //Gestor Escolar
            $found = false;
            foreach ($PATHS['gestor_escolar'] as $path) {
                if (strpos(current_url(), $path) !== false || $this->endsWith(current_url(), 'index.php')) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                redirect("https://webcrato.crato.ce.gov.br");
            }
        }


        if ($level == "4") { //Gestor Secretaria
            $found = false;
            foreach ($PATHS['gestor_secretaria'] as $path) {
                if (strpos(current_url(), $path) !== false || $this->endsWith(current_url(), 'index.php')) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                redirect("https://webcrato.crato.ce.gov.br");
            }
        }

        if ($level == "2" || $level == "1") { //Admin
            $found = false;
            foreach ($PATHS['admin'] as $path) {
                if (strpos(current_url(), $path) !== false || $this->endsWith(current_url(), 'index.php')) {
                    $found = true;
                    break;
                    
                }
            }
            if (!$found) {
                redirect("https://webcrato.crato.ce.gov.br");
            }
        }
    }

}
