<?php
function generatePassword($lenghtPass)
{
    $characters = '.-_+*#0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $passwordString = '';
    for ($i = 0; $i < $lenghtPass; $i++) {
        $passwordString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $passwordString;
}
$passwordGenereator = isset($_GET["pass"]);
/* var_dump($passwordGenereator); */
if ($passwordGenereator) {
    echo generatePassword($_GET["pass"]);
}
