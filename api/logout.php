<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

unset($_SESSION['token']);
die(json_encode(array('success' => 'logout successfully')));