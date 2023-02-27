<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

if (!isset($_SESSION['token']))
    die(json_encode(array('error' => 'no token')));

die(json_encode(array('token' => $_SESSION['token'])));