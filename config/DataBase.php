<?php 

class Database{

	public static function connect(){

		return new PDO(DSN,USR_NAME,USR_PWD);
	}
}

?>