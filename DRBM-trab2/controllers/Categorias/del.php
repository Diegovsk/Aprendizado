<?php
require "../../models/NotebooksModel.php";

$NotebooksModel = new NotebooksModel();

$id = $_GET['id'];


$NotebooksModel->del($id);


header("Location: ../../views/Categorias");