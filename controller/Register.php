<?php

class Register
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $reg_fname = Secure::stringPOST('reg_fname');
            $reg_lname = Secure::stringPOST('reg_lname');
            $reg_email = Secure::emailPOST('reg_email');
            $reg_pwd = Secure::stringHashPOST('reg_pwd');
            $reg_pwd_rpt = Secure::stringPOST('reg_pwd_rpt');

            if (password_verify($reg_pwd_rpt, $reg_pwd))
            {
                $registerModel = Model::create('RegisterModel');
                $registerModel->register($reg_fname, $reg_lname, $reg_email, $reg_pwd);

                header('Location: /verify');

            }

        }

    }
}



?>
