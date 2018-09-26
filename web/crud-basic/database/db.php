<?php
class DB
{

	const DB_HOST = 'localhost';
	const DB_USERNAME = 'root';
	const DB_PASSWORD = 'root';
	const DB_NAME = 'training_php';

	private static $conn;
	
	public static function connect()
	{
		self::$conn = new mysqli(self::DB_HOST, self::DB_USERNAME, self::DB_PASSWORD, self::DB_NAME);

		return self::$conn;
	}

	public static function disconnect()
	{
		self::$conn->close();
	}
}