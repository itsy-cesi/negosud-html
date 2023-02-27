<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

if (!isset($_POST['token']))
    die(json_encode(array('error' => 'no token provided')));

$_SESSION['token'] = $_POST['token'];
die(json_encode(array('success' => 'success login')));