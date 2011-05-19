<?php
// rewrite this system to use a singleton pattern 
// and ensure that there's only ever one database connection open
// per request
abstract class baseDB {
	
	static protected $connections = array();
	protected $connection;
	
	public function query($sql)
	{
		return $this->connection->query($sql);
	}
}

class sqliteDB extends baseDB {
	public static function getInstance($dsn, $u='', $p='')
	{
		if(self::$connections[$dsn]==null)
		{
			self::$connections[$dsn] = new sqliteDB();
			self::$connections[$dsn]->connection = self::$connections[$dsn]->connect($dsn);
		}
		return self::$connections[$dsn];
	}
	
	static public function connect($dsn)
	{
		return new PDO("sqlite:".$dsn);		
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

$db = sqliteDB::getInstance("./testdb2.sqlite");
print_r($db);
echo get_class($db);
// run once
$db->__setupTables();
$result = $db->query("select * from user");
$all = $result->fetchAll(PDO::FETCH_ASSOC);
print_r($all);
