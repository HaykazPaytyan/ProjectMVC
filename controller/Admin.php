<?php

class Admin
{
    public function index()
    {
        Session::init();

        if ($_SESSION['active'] == false)
        {
            header('Location: /');
            Session::destroy();
        }

        $id = $_SESSION['usr_id'];

        $usr_data = Model::create('AdminModel');
        $row = $usr_data->select($id);

        View::render('admin/index', array(
            'row' => $row
        ));

    }
}



?>
