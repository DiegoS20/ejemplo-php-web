<?php
require_once ('../models/Pais.php');

$id = @$_GET['id'];

if (!is_null($id))
    Pais::delete(intval($id));

header("location:/ejemplo-web");