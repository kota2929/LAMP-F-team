<?php
/*/*!
@file hinagata.php
@brief ページ作成の雛形ファイル
@copyright Copyright (c) 2024 Yamanoi Yasushi.
*/

//ライブラリをインクルード
/*/require_once("common/libs.php");

$err_array = array();
$err_flag = 0;
$page_obj = null;


//--------------------------------------------------------------------------------------
///	本体ノード
//--------------------------------------------------------------------------------------
/*class cmain_node extends cnode {
	//--------------------------------------------------------------------------------------
	/*!
	@brief	コンストラクタ
	*/
	//--------------------------------------------------------------------------------------
	/*public function __construct() {
		//親クラスのコンストラクタを呼ぶ
		parent::__construct();
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief  本体実行（表示前処理）
	@return なし
	*/
	//--------------------------------------------------------------------------------------
	/*public function execute(){
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	構築時の処理(継承して使用)
	@return	なし
	*/
	//--------------------------------------------------------------------------------------
	/*public function create(){
	}
	//--------------------------------------------------------------------------------------
	/*!
	@brief  表示(継承して使用)
	@return なし
	*/
	//--------------------------------------------------------------------------------------
	/*public function display(){*/
//PHPブロック終了*/*/
?>
<!-- コンテンツ　-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注文確定</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>
    
  
.p1{
    margin-top: 100px;
    text-align: center;

  font-size: 50px;
}
.title {
    margin-top: 0px;
    text-align: center;
        font-size: 50px;
    }

    button{
    
      text-align: center;
        margin-top: 150px;
        
    padding: 10px 120px;
  border-radius: 50px;
  font: bold 25px sans-serif;
    
    border:rgb(2, 229, 250) 2px solid;
    
    background: rgb(2, 229, 250);
    color: #FFF;
}
.example{
    /*コレ*/text-align: center;
}
  </style>
    <body>
			<!-- ヘッダー -->
			<header class="bg-light border-bottom">
			  <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
				<a class="navbar-brand nav-center" href="#">
				<img src="img/rogo(仮).png" alt="ブランドロゴ" style="height: 50px;"> <!-- ここで画像を挿入 -->
			  </a>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-center">
					  <li class="nav-item">
						<a class="nav-link active nav-text" aria-current="page" href="item-home.php">ホーム</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link nav-text" href="アンケート.php">コーデ相談</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link nav-text" href="FAQ.php">FAQ</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link nav-text" href="toiawase.php">お問い合わせ</a>
					  </li>
					</ul>
					<ul class="navbar-nav ms-3">

					<li class="nav-item">
					<a class="nav-link" href="../mypage.php">
						<img src="img/kkrn_icon_user_13.png" alt="ユーザアイコン" class="user-img">
					</a>
				</li>

					<li class="nav-item">
                <a class="nav-link star-text" href="../okini.php"><i class="bi bi-person"></i> ☆</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="../kart.php">
					<img src="img/1223676.png" alt="カートアイコン" class="kart-img">
				</a>
			</li>
					</ul>
				  </div>
				</div>
			  </nav>
			</header>

    <!-- コンテンツ -->
    <main class="container mt-4">
      <p  class="p1">ありがとうございます。</p>
      <p class="title">注文が確定しました。</p>
      <div class="example">
      <button onclick="">
        戻る
    </button>

</div>
<br><br>
        </main>
        <!-- フッター -->
		<footer class="bg-light text-center text-lg-start border-top mt-auto">
		  <div class="container p-4">
			<div class="row">
			  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
				<h5 class="text-uppercase">会社情報</h5>
				<p>
				  ここに会社の説明文を入れます。お客様に対するメッセージや、会社のビジョンなど。
				</p>
			  </div>
			  <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">サポート</h5>
				<ul class="list-unstyled mb-0">
				  <li>
					<a href="mahune/toiawase.php" class="text-dark">お問い合わせ</a>
				  </li>
				  <li>
					<a href="FAQ.php" class="text-dark">よくある質問</a>
				  </li>
				  <li>
					<a href="purapo.php" class="text-dark" >返品ポリシー</a>
				  </li>
				</ul>
			  </div>
			  <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">フォローする</h5>
				<ul>
				<li>
				  <a href="#" class="text-dark sns-text">
					<img class="sns-img" src="img/icons8-フェイスブック-50.png" alt="Facebook">
					<i class="bi bi-facebook"></i> Facebook
				  </a>
				</li>
				<li>
				  <a href="#" class="text-dark sns-text">
					<img src="img\icons8-ツイッターx-50.png" alt="X(旧Twitter)" class="sns-img">
					<i class="bi bi-twitter"></i> X(旧Twitter)
				  </a>
				</li>
				<li>
				  <a href="#" class="text-dark sns-text">
					<img src="img\icons8-インスタグラム-50 (1).png" alt="Instagram" class="sns-img">
					<i class="bi bi-instagram"></i> Instagram
				  </a>
				</li>
			  </ul>
			  
			  </div>
			</div>
		  </div>
		  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2024 会社名
		  </div>
		</footer>
	
		<!-- 必要なスクリプトの読み込み順序を修正 -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
		<script src="js\index.js"></script>
	  
	  </body>

<!-- /コンテンツ　-->
<?php 
//PHPブロック再開
	/*}
	//--------------------------------------------------------------------------------------
	/*!
	@brief	デストラクタ
	*/
	//--------------------------------------------------------------------------------------
	/*public function __destruct(){
		//親クラスのデストラクタを呼ぶ
		parent::__destruct();
	}
}

//ページを作成
$page_obj = new cnode();
//ヘッダ追加
$page_obj->add_child(cutil::create('cheader'));
//本体追加
$page_obj->add_child($main_obj = cutil::create('cmain_node'));
//フッタ追加
$page_obj->add_child(cutil::create('cfooter'));
//構築時処理
$page_obj->create();
//本体実行（表示前処理）
$main_obj->execute();
//ページ全体を表示
$page_obj->display();
*/
?>
