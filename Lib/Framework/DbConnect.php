<?php

	/*
		This file is part of the simple-website-project-php package.

		Copyright (c) Mathieu BESSOU

		MIT License

		For the license information, view the LICENSE file distributed with this source code.
	*/
	

	
	
class DbConnect
{
	protected static $instance;

	protected function __construct() { }
	protected function __clone() { }

	public function newConnection(string $serverName, string $dbName, string $username, string $password, $debugMode = false)
	{
		try
		{
			$db = new \PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $username, $password);
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

			$db->exec("SET NAMES 'utf8'");
		}
		catch (Exception $e)
		{
			if ($debugMode) die('Error : ' . $e->getMessage());
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
