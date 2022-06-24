<?php

require_once "class/Crud.php";

$crud = new Crud;

$insert = $crud->insertAuteur("auteur", $_POST);

header("Location: index.php");


?>