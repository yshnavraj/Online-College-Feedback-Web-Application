<?php
error_reporting(E_ALL ^ E_WARNING);
require 'index.php';
session_destroy();
unset($GLOBALS['uname']);
?>
