<?php
// rewrite this system to use a singleton pattern 
// and ensure that there's only ever one database connection open
// per request
abstract class baseDB {
	
	public $dsn;
	public $username;
	public $password;
	protected $connection;
	
	public function __construct($dsn, $username='', $password='')
	{
		$this->dsn = $dsn;
		$this->username = $username;
		$this->password = $password;
	}
	
	public function query($sql)
	{
		return $this->connection->query($sql);
	}
}

class sqliteDB extends baseDB {
	public function __construct($dsn)
	{
		parent::__construct($dsn);
		$this->connection = new PDO("sqlite:".$dsn);		
	}
	
	public function __setupTables()
	{
		$sql = 
			"CREATE TABLE user (
			  id INTEGER PRIMARY KEY AUTOINCREMENT,
			  username VARCHAR(25),
			  password TEXT
			)";
		$this->query($sql);
		$sql = "insert into user (username, password) values ('g','g')";
		$this->query($sql);
	}
}

$db = new sqliteDB("./testdb.sqlite");
// run once
$db->__setupTables();

$result = $db->query("select * from user");
$all = $result->fetchAll(PDO::FETCH_ASSOC);
print_r($all);
