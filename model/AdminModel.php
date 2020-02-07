<?php 

class AdminModel
{
	private $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function select($id)
	{
		$stmt = $this
            ->db
            ->prepare('SELECT * FROM users WHERE usr_id = :id');
        $stmt->execute(array(
            ':id' => $id
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
	}
}

?>