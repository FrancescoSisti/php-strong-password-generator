<?php

function generatePassword($length)
{
    $dictionary = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}[]|:;,.?/~';
    $password = '';
    //ciclo for
    for ($i = 0; $i < $length; $i++) {
        $password .= $dictionary[rand(0, strlen($dictionary) - 1)];
    }
    return $password;
}

function getPasswordLength()
{
    //ternario
    return isset($_GET['length']) ? intval($_GET['length']) : 0;
}

function generatePasswordIfValid($length)
{
    if ($length > 0) {
        return generatePassword($length);
    }
    return '';
}
