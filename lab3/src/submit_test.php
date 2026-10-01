<?php

session_start();
require_once "includes/test_functions.php";
$resultsFile = "data/results.txt";


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Metodă invalidă.");
}


if (!isset($_SESSION["test_email"])) {
    header("Location: index.php");
    exit;
}


$email = $_SESSION["test_email"];


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Email invalid.");
}


if (email_exists($email, $resultsFile)) {
    die("Acest email a fost deja utilizat pentru test.");
}


$requiredQuestions = [
    "q1",
    "q2",
    "q3",
    "q4",
    "q5",
    "q6",
    "q7",
    "q8",
    "q9"
];


foreach ($requiredQuestions as $question) {

    if (!isset($_POST[$question])) {

        die(
            "Nu ai completat toate întrebările. Lipsește: "
            . htmlspecialchars($question)
        );
    }
}


if (
    !is_array($_POST["q3"]) ||
    !is_array($_POST["q5"]) ||
    !is_array($_POST["q9"])
) {
    die("Date invalide pentru întrebările checkbox.");
}


$score = 0;



$score += evaluate_radio(
    $_POST["q1"],
    "5"
);

$score += evaluate_radio(
    $_POST["q4"],
    "314.15"
);

$score += evaluate_radio(
    $_POST["q7"],
    "-sqrt3/3"
);




$score += evaluate_checkbox(
    $_POST["q3"],
    ["2-6", "3-5", "4-4"]
);

$score += evaluate_checkbox(
    $_POST["q5"],
    ["a", "b"]
);

$score += evaluate_checkbox(
    $_POST["q9"],
    ["a", "b", "c"]
);


$score += evaluate_text(
    $_POST["q2"],
    "7"
);

$score += evaluate_text(
    $_POST["q6"],
    "x^4 + 1.5x^2 + c"
);

$score += evaluate_text(
    $_POST["q8"],
    "pi/3"
);


saveResult(
    $email,
    $score,
    $resultsFile
);


$_SESSION["test_result"] = $score;
$_SESSION["test_email"] = $email;


header("Location: result_text.php");
exit;