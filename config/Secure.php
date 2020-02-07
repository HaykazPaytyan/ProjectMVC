<?php

class Secure
{
    public static function stringPOST($string)
    {
        if (empty($_POST[$string]))
        {
            header('Location: /');
        }
        else
        {

            return filter_input(INPUT_POST, $string, FILTER_SANITIZE_STRING);
        }
    }

    public static function emailPOST($email)
    {
        if (empty($_POST[$email]))
        {
            header('Location: /');
        }
        else
        {

            return filter_input(INPUT_POST, $email, FILTER_SANITIZE_EMAIL);
        }
    }

    public static function stringHashPOST($string)
    {
        if (empty($_POST[$string]))
        {
            header('Location: /');
        }
        else
        {

            return password_hash($_POST[$string], PASSWORD_DEFAULT);
        }
    }
}

?>
