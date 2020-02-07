<?php

class LoginModel
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function login($email)
    {
        $stmt = $this
            ->db
            ->prepare('SELECT * FROM users WHERE usr_email = :email');
        $stmt->execute(array(
            ':email' => $email
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}

?>
