<?php 
	require('models/blog.php');


	// コントローラのクラスをインスタンス化
	$controller = new BlogsController();

	// アクション名によって、呼び出すメッソドを変える
	// $action（グローバル変数）は、routes.phpで定義されているもの
	switch ($action) {
		case 'index':
			$controller->index();
			break;

		default:
			# code...
			break;
	}



	class BlogsController {
		// プロパティ
		private $action = '';
		private $resource = '';
		private $viewOptions = '';

		public function index() {
			// モデルを呼び出す
			$blog = new Blog();
			$this->viewOptions = $blog->index();

			// foreach ($this->$viewOptions as $viewOption) {
			// 	echo $viewOption['id'];
			// 	echo $viewOption['title'];
			// 	echo $viewOption['created'];
			// }

			// アクション名を設定する
			$this->action = 'index';

			// ビューを呼び出す
			require('views/layout/application.php');
		}
	}
 ?>