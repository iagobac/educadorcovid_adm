<?php

function validar_data($dat = '0000-00-00') {
    if (count(explode("/", "$dat")) == 3 || count(explode("-", "$dat")) == 3) {
        $data = explode("/", "$dat");
        if (count($data) > 1) {
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
        } else {
            $data2 = explode("-", "$dat");
            $d = $data2[2];
            $m = $data2[1];
            $y = $data2[0];
        }


        $res = checkdate($m, $d, $y);
        if ($res == 1) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function cvt_data_br($dat = '0000-00-00') {
    if (count(explode("/", "$dat")) == 3 || count(explode("-", "$dat")) == 3) {
        $data = explode("/", "$dat");
        if (count($data) > 1) {
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
        } else {
            $data2 = explode(" ", "$dat");
            $data2 = explode("-", "$data2[0]");

            $d = $data2[2];
            $m = $data2[1];
            $y = $data2[0];
        }
        $res = checkdate($m, $d, $y);
        if ($res == 1) {
            return $d . '/' . $m . '/' . $y;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function cvt_data_eua($dat = '0000-00-00') {
    if (count(explode("/", "$dat")) == 3 || count(explode("-", "$dat")) == 3) {
        $data = explode("/", "$dat");
        if (count($data) > 1) {
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
        } else {
            $data2 = explode("-", "$dat");
            $d = $data2[2];
            $m = $data2[1];
            $y = $data2[0];
        }
        $res = checkdate($m, $d, $y);
        if ($res == 1) {
            return $y . '-' . $m . '-' . $d;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function gerarProtocolo($tamanho = 9, $forca = 0) {
    $vogais = '0123456789';
    $consoantes = '0123456789';
    if ($forca >= 1) {
        $consoantes .= 'BDGHJLMNPQRSTVWXZ';
    }
    if ($forca >= 2) {
        $vogais .= "AEUY";
    }
    if ($forca >= 4) {
        $consoantes .= '23456789';
    }
    if ($forca >= 8) {
        $vogais .= '@#$%';
    }
    $senha = '';
    $alt = 1;
    for ($i = 0; $i < $tamanho; $i++) {
        if ($alt > 1) {
            $senha .= $consoantes[(rand() % strlen($consoantes))];
            $alt = 1;
        } else {
            $senha .= $vogais[(rand() % strlen($vogais))];
            $alt += 1;
        }
    }
    return $senha;
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

function gerar_select_options($options) {
    $opcao = '';
    foreach ($options as $option) {
        $opcao .= "<option value='" . $option['bs_id'] . "'>" . $option['bs_descricao'] . "</option>";
    }
    return $opcao;
}

function get_select_text($campo, $selects) {

    foreach ($selects as $option) {
        if ($option['bs_id'] === $campo) {
            return $option['bs_descricao'];
        }
    }
}

function gerar_select($options) {
    $opcao = '<option value=""></option>';
    foreach ($options as $option => $value) {
        $opcao .= "<option value='" . $value['id'] . "'>" . $value['nome'] . "</option>";
    }
    return $opcao;
}
