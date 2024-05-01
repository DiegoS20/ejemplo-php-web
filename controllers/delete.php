<?php
require_once ('../models/Pais.php');

$id = $_GET['id'];

Pais::delete(intval($id));

header("location:/ejemplo-web");