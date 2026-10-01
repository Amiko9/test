<?php

function validate_text($str){
    return strtolower(trim($str));
}

function evaluate_radio($user_answer, $corect_answer){
    if($user_answer===$corect_answer){
        return true;
    }
    else return false;
}

function evaluate_text($user_answer, $corect_answer){
    $user_answer = validate_text($user_answer);
    $corect_answer = validate_text($corect_answer);

    if($user_answer===$corect_answer){
        return true;
    }
    else return false;
}

function evaluate_checkbox($user_answer, $corect_answer){   
    if(is_array($user_answer)){
        sort($user_answer);
        sort($corect_answer);
        if($user_answer===$corect_answer){
        return true;
        }   
        else return false;
    }

}
function saveResult($email, $score, $file)
{
    $date = date("Y-m-d H:i:s");

    $line = $date . "|" . $email . "|" . abs($score) . PHP_EOL;

    file_put_contents(
        $file,
        $line,
        FILE_APPEND | LOCK_EX
    );
}

function email_exists($email, $file)
{
    if (!file_exists($file)) {
        return false;
    }

    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {

        $data = explode('|', $line);

        if (count($data) >= 3) {

            if (trim($data[1]) === $email) {
                return true;
            }
        }
    }

    return false;
}