<?php

class Login
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $log_email = Secure::emailPOST('log_email');
            $log_pwd = Secure::stringPOST('log_pwd');

            $create = Model::create('LoginModel');
            $row = $create->login($log_email);

            if (password_verify($log_pwd, $row['usr_pwd']))
            {

                Session::init();
                $_SESSION['active'] = true;
                $_SESSION['usr_id'] = $row['usr_id'];
                header('Location: /admin');

            }
            else
            {

                header('Location: /');
            }

        }

    }
}



?>
