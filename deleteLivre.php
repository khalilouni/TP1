<?php

require_once 'class/Crud.php';


$crud = new Crud;

$delete = $crud->delete('livre', $_REQUEST["id"])
    


?>