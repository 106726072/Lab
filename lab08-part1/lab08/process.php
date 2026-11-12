<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === 'Ba Hung' && $password === 'SWS02178') {
        $_SESSION['user'] = $username;
        header('Location: welcome.php');
        exit;
    }
}

header('Location: login.php?error=1');
exit;