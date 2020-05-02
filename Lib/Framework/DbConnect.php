<?php

class DbConnect
{
	protected static $instance;

	protected function __construct() { }
	protected function __clone() { }

	public function newConnection(string $serverName, string $dbName, string $username, string $password)
	{
		try
		{
			$db = new \PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $username, $password);
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

			$db->exec("SET NAMES 'utf8'");
		}
		catch (Exception $e)
		{
			die('Error : ' . $e->getMessage());
		}
		return self::$instance = $db;
	}

	public static function getInstance()
	{
		if (!isset(self::$instance))
		{
			throw new Exception("Error Processing Request", 1);
		}
		return self::$instance;
	}
}
