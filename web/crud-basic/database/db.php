<?php
class DB
{

	const DB_HOST = 'us-cdbr-iron-east-01.cleardb.net';
	const DB_USERNAME = 'b7542d3c6397f7';
	const DB_PASSWORD = '86517cdd';
	const DB_NAME = 'heroku_b39dc8403726cd5';

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