<?php
session_start();

$login = 'jodavasi';

$_SESSION['admin'] = $login;

if(isset($_SESSION['admin'])){

    header('Location:index.php');
}