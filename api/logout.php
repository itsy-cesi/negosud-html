<?php
header('Content-Type: application/json; charset=utf-8');

session_start();

unset($_SESSION['token']);
header("Location: /");
exit();