<?php 
	session_start();
	error_reporting(1);
	

	define('DB_HOST','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_NAME','uk17_db');
	define('DB_PREFIX','uk_17');
	define('DB_PREFIX','uk_17');
	define('TABLE_PREFIX','store');

	class Database
	{
		public $database_name;
		public $database_username;
		public $database_password;
		public $database_host;
		public $conn;
		//global $conn;


		public function __construct()
		{
			$this->database_host 		= 	DB_HOST;
			$this->database_username 	= 	DB_USERNAME;
			$this->database_password 	= 	DB_PASSWORD;
			$this->database_name 		= 	DB_NAME;

				
			try {
				 
			   $conn = new PDO('mysql:host='.$this->database_host.';dbname='.$this->database_name.'', $this->database_username, $this->database_password);
			    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    return $conn;
			} catch (PDOException $e) {
				echo'<pre>'; print($e);
			    // attempt to retry the connection after some timeout for example
			}

		}

		// get admin site informtion
		function store_information()
		{ 
			$query = "SELECT * FROM ".TABLE_PREFIX."_config";
			$result = $conn->query($query);
			$publishers = $result->fetchAll(PDO::FETCH_ASSOC);
			print($publishers);
		}
	}


 
?>