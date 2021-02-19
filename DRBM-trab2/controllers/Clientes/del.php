<?php
include "../../helpers/config.php";
require "../../models/ClienteModel.php";

$ClienteModel = new ClienteModel();

$id = $_GET['id'];


$ClienteModel->del($id);


header("Location: ../../views/Clientes/");