<?php
	// ①GETパラメータ取得
	// explode関数：第二引数の文字列を、第一引数の文字列で分割し、配列で返す関数
	$params = explode('/', $_GET['url']);



	// ②パラメータの分解
	$resource = $params[0];
	$action = $params[1];
	$id = 0;

	// もしidがあった場合は、idも取得する
	if (isset($params[2])) {
		$id = $params[2];
	}

	// ③コントローラの呼び出し
	require('controllers/'.$resource.'_controller.php');




?>