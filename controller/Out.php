<?php

class Out
{
    public function index()
    {
        Session::init();
        $_SESSION['active'] = false;
        Session::destroy();
        header('Location: /');
    }
}


?>
