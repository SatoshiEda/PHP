<?php
class DB
{
	private $_db_type = 'mysql';
	private $_db_user = 'root';
	private $_db_pass = 'root';
	private $_db_name = 'db_name';
	private $_db_host = 'localhost';
	
	private $_db_char = 'utf8';
	private $_dsn = '';
	private $_pdo = '';
	private $_debug = 0;

	public function __construct()
	{
		$this->_dsn = $this->_db_type . ':host=' . $this->_db_host . ';dbname=' . $this->_db_name . ';charset=' . $this->_db_char;
		self::ConnectDB();
	}
	
	// DB接続
	//**************************************
	public function ConnectDB()
	{
		try {
			if (!$this->_pdo) {
				$this->_pdo = new PDO($this->_dsn, $this->_db_user, $this->_db_pass);
				$this->_pdo->query('SET NAMES ' . $this->_db_char);
				$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return $this->_pdo;
			
		} catch (PDOException $e) {
			$this->ErrorOutput($_SERVER['PHP_SELF'], 'データベース接続失敗。', $e->getMessage(), '');
			exit();
		}
	}
}
