<?php

session_start();

require_once "includes/test_functions.php";

$resultsFile = "data/results.txt";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}


$email = trim($_POST["email"] ?? "");


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Email invalid.");
}


if (email_exists($email, $resultsFile)) {
    die("Acest email a rezolvat deja testul.");
}


$_SESSION["test_email"] = $email;


header("Location: test.php");
exit;