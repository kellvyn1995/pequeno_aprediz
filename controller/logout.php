<?php
include_once '../model/logado.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
        unset($_SESSION['idUser']);
        unset($_SESSION['nome_pro']);
        echo 'vc saiu do sistema';

}else {
    echo 'usuario não estava conectado';
}

?>