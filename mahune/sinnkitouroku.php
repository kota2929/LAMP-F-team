<?php
/*!
@file hinagata.php
@brief ページ作成の雛形ファイル
@copyright Copyright (c) 2024 Yamanoi Yasushi.
*/

//ライブラリをインクルード


$err_array = array();
$err_flag = 0;
$page_obj = null;


//--------------------------------------------------------------------------------------
///	本体ノード
//--------------------------------------------------------------------------------------

//PHPブロック終了
?><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>新規登録</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>


.p1{

text-align: center;

font-size: 65px;
}
.title {

text-align: center;
font-size: 20px;
}

button{

    text-align: center;
    margin-top: 50px;
    
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
th{
font: bold 25px sans-serif;


background-color: #ffffff;




}
.fg{
width: 200px;
}
.hg{
width: 98px;
}
.ug{
width: 370px;
}
.pg{
width: 180;

}

img {
border: solid 1px #ffffff; /* 色：グレー */

}

.ZXx{
text-align: center;

}  
table{


padding-top : 100px;
}
.g1{
width: 450px;
height: 40px;

}
.g2{
width: 70px;
height: 40px;

}
.g3{
width: 90px;
height: 40px;

}
.g4{
text-align: center;
width: 450px;
height: 200px;

}
main p{
    margin-bottom: 15px; 
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
						<a class="nav-link nav-text" href="mahune/toiawase.php">お問い合わせ</a>
					  </li>
					</ul>
					<ul class="navbar-nav ms-3">

					<li class="nav-item">
					<a class="nav-link" href="mypage.php">
						<img src="img/kkrn_icon_user_13.png" alt="ユーザアイコン" class="user-img">
					</a>
				</li>

					<li class="nav-item">
                <a class="nav-link star-text" href="okini.php"><i class="bi bi-person"></i> ☆</a>
				</li>

				<li class="nav-item">
				<a class="nav-link" href="kart.php">
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
    
  <p  class="p1">新規会員登録</p>
  
  <div class="ZXx">
    <table align="center" >
    <tr><th>メールアドレス</th><td><form action="#" method="post">
        
            <input type="text" class="g1" name="name">
    </form></td></tr>
    <tr><th>パスワード</th><td><form action="#" method="post">
        
        <input type="text" class="g1" name="name">
</form></td></tr>
<tr><th>郵便番号</th><td><form action="#" method="post">
        
    <input type="text" class="g1" name="name">
</form></td></tr>

</table>
<table align="center" >
<tr><th class="fg">生年月日</th><td><form action="#" method="post">
        
<input type="text" class="g2" name="name">
</form><th class="hg">年</th><td><form action="#" method="post">
        
<input type="text" class="g2" name="name">
</form><th class="hg">月</th><td><form action="#" method="post">
        
<input type="text" class="g2" name="name">
</form><th>日</th></td>
</table>
<table align="center" >
<tr><th class="pg">性別</th><td> <input type="radio"  name="q1"  value="通常配送" >男</input>
    <td ><input type="radio"  name="q1"  value="日時指定">女</td></tr>
<tr><th >年齢</th><td><form action="#" method="post">
    
    <input type="text" class="g3" name="name">
</form></td></tr>
<tr><th >身長</th><td><form action="#" method="post">
    
<input type="text" class="g3" name="name">
</form></td></tr>
<tr><th >体重</th><td><form action="#" method="post">
    
<input type="text" class="g3" name="name">
</form></td><th class="ug"></th></tr>
<tr><th>ウエスト</th><td><form action="#" method="post">
    
<input type="text" class="g3" name="name">
</form></td></tr>
<tr><th>股下</th><td><form action="#" method="post">
    
<input type="text" class="g3" name="name">
</form></td></tr>

</table>
<button onclick="">
登録
</button>
</div>
<br><br>
    </main>
    </div>
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
              <a href="#" class="text-dark">お問い合わせ</a>
            </li>
            <li>
              <a href="#" class="text-dark">よくある質問</a>
            </li>
            <li>
              <a href="#" class="text-dark">返品ポリシー</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">フォローする</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-dark"><i class="bi bi-facebook"></i> Facebook</a>
            </li>
            <li>
              <a href="#" class="text-dark"><i class="bi bi-twitter"></i> Twitter</a>
            </li>
            <li>
              <a href="#" class="text-dark"><i class="bi bi-instagram"></i> Instagram</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 会社名
    
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>