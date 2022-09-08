<?php
include_once '../model/logado.php';
if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){  
}else{
    echo '<script>window.location.href = "../view/login.html";</script>';
}
?>