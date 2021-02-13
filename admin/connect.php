<?php

	class database
	{
		public $hostAddress="localhost";
		public $userName="root";
		public $password=123;
		public $database="meenaclick";
		public $link;
		public $message;

		function __construct()
		{
			$this->dbConnect();
		}

		private function dbConnect()
		{
			$this->link=new mysqli($this->hostAddress,$this->userName,$this->password,$this->database);

			if($this->link)
			{
				$this->message="Database Connected";
			}
			else
			{
				$this->message="Database Not Connected";
			}
		
		}

		function __destruct()
		{
			$this->link->close();
		}

		
	}



?>