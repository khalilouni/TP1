<?php
require_once "class/Crud.php";

$crud = new Crud;

$insert = $crud->insert("livre", $_POST);

header("Location: index.php");


?>