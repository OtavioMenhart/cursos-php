<?php
session_start();
$_SESSION['nome'] = "Rita";
var_dump(get_defined_vars());