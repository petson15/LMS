<?php  
session_start();

$initial_payment = 0;

$initial_payment = $_POST['initial_payment'];

$_SESSION['initial_payment'] = $initial_payment;



?> 