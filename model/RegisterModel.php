<?php

class RegisterModel
{

    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function register($fname, $lname, $email, $pwd)
    {
        $stmt = $this
            ->db
            ->prepare('INSERT INTO users (usr_id , usr_fname , usr_lname , usr_email, usr_pwd) VALUES(NULL, :fname, :lname, :email,:pwd)');
        $stmt->execute(array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':pwd' => $pwd
        ));

        

    }
}

?>
