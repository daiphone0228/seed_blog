<?php 
	class Blog {
		// プロパティ
		private $dbconnect = '';

		// コンストラクタ
		public function __construct() {
			require('dbconnect.php');
			// DB接続設定の値を代入
			$this->dbconnect = $db;
		}

		public function index() {
			$sql = 'SELECT * FROM `blogs` WHERE `delete_flag` =0';
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			// 取得結果を返す
			return $rtn;
		}
	}
 ?>