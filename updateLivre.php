<?php

    require_once "class/Crud.php";

    $crud = new Crud;

    var_dump($_POST);
    $update = $crud->update("livre", $_POST, "idLivre", $_POST["idLivre"]);

    

?>