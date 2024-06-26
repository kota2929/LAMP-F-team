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
?>
<!-- コンテンツ　-->

<head>

    <meta charset="utf-8">
    <script>
// コードを記述する
const datelist = document.getElementById('datelist')
//表示終了日
const end = 7
//日本の曜日
const week = ['日', '月', '火', '水', '木', '金', '土']

if(end !== undefined){

    for(let i = 0; i < end; i++){
        //取得する日付の値を設定
        let param = Date.now() + i * 86400000
        //値から日付を取得
        let date = new Date(param)
        
        //dateから年を取得
        let y = date.getFullYear()
        //dateから月を取得
        let m = date.getMonth()+1
        //dateから日を取得
        let d = date.getDate()
        //dateから曜日を取得
        let w = date.getDay()
        
        //月を2桁に揃える
        if(m < 10){ m = '0'+m }
        //日を2桁に揃える
        if(d < 10){ d = '0'+d }
        
        //テキストの出力形式
        let textFormat = y+'年'+m+'月'+d+'日'+'('+week[w]+')'
        //値の出力形式
        let valueFormat = y+'-'+m+'-'+d
        
        //option要素を作成
        let option = document.createElement('option')
        //optionのテキストを指定
        option.textContent = textFormat
        //optionの値を指定
        option.value = valueFormat
        //detelistの末尾に追加
        datelist.appendChild(option);
    }
}
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>お支払い</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>
  
.left{
      float: left;
      
    }
    .clear{
      clear: both;
    }
 h1{
    font-size: 25px;
 }
 .right{
      float: right;

    }
.righ{
    /*コレ追加*/width: 30%;

}
.rih{
    
                padding: 0% 60% 
}
.box{width: 20%; border:#ffffff;}
.box1{
    width:45%;
      height:120px;
      border:#ffffff;
}
.box2{
    width: 80%;
      height:100px;
      border:#ffffff;
}
.box3{
    width: 13%;
      height:130px;
      background-color: rgb(181, 178, 176);
      border:#ffffff;
}
button{
    
    

    padding: 7px 20px;
  border-radius: 25px;
    font: bold 10px sans-serif;
    text-decoration:none;
    
    border:rgb(2, 229, 250) 2px solid;
    display: block;
    margin: auto;
    background: rgb(2, 229, 250);
    color: #FFF;
}

.huj{
    color: #000000;
    margin-left:20px;
}

#app {
    width: 96%;
    max-width: 500px;
    margin: 40px auto;
    padding: 20px;
    padding: 28px;
    border: 1px solid #ffffff;
    border-radius: 5px;
    background-color: transparent;
    box-shadow: 2px 2px 5px 0px rgba(200, 200, 200, 1);
    font-family: "Times New Roman";
}
/*popup表示させたいコンテンツのレイアウトと位置*/
#popup{
  width:30%;
  line-height:100px;
  background:#000;
  padding:0 4%;
  box-sizing:border-box;
  display:none;
  position:fixed;
  top:50%;
  left:50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
img{
  width:100%;
}
label{
  display:block;
}
/*ボタンの装飾*/
label span{
  display:block;
  background-color:#01b6ed;
  color:#fff;
  width:200px;
  line-height:40px;
  border-radius:4px;
  text-align:center;
}
label span:hover{
  cursor:pointer;
}
input[type="checkbox"]{
  display:none;
}
/*checkboxがチェックの状態になったらpopupを表示させる*/
input[type="checkbox"]:checked + #popup{
  display:block;
}
  </style>
   <body>
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

    <!-- コンテンツ -->
    <main class="container mt-4">

    
      <h1>お届け先・配送方法・お支払い方法</h1>
      <hr>
      
      <title>郵便番号検索API</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="postal_api.js"></script>
</head>
<body>
  <div class="container col-6">
    <h1 style="text-align: center; margin-top: 2.4rem; margin-bottom: 1.6rem">入力フォーム</h1>
    <div>
      <form method="post" action="#" style="width: fit-content; margin: 0 auto;">
        郵便番号<br />
        <input type="text" name="zip_code" style="width:100px" id="zip_code">
        <input type="button" value="住所検索" id="search_address_btn">
        <input type="button" value="クリア" id="search_clear_btn">
        <br />
        都道府県<br />
        <input type="text" name="address1" style="width:500px" id="address1"><br />
        市区町村<br />
        <input type="text" name="address2" style="width:500px" id="address2"><br />
        その他<br />
        <input type="text" name="address3" style="width:500px" id="address3"><br />
        建物名など<br />
        <input type="text" name="address4" style="width:500px"><br />
        <br />
        <div class="submit_button_right" style="text-align: right;">
          <input type="submit"><br />
        </div>
      </form>
    </div>
  </div>
  <label>
  <span>popupを表示</span>
  <input type="checkbox" name="checkbox">

</label>
        <div class="left box3"><p>小計</p>
                               <p>￥7,480</p>
                               <button onclick="">
                                会計へ
                            </button>

        </div>
      
    
        
        <div class="clear">
            <hr>
        <div class="left box"><p>配送方法</p></div>
        <div class="left box2"> <input type="radio"  name="q1"  value="通常配送">通常配送 <p1>○月×日～○月△日 発送予定</p1><div> 
            <input type="radio"  name="q1"  value="日時指定">日時指定</div>
            
            <select id="dateSelector"></select>
            <script>
document.addEventListener("DOMContentLoaded", function() {
  var select = document.getElementById("dateSelector");
  var today = new Date();
  
  // 今日から一週間後までの日付をループして追加
  for (var i = 0; i < 7; i++) {
    var date = new Date();
    date.setDate(today.getDate() + i);
    var month = date.getMonth() + 1; // 月は0から始まるため
    var day = date.getDate();
    
    var option = document.createElement("option");
    option.text = month + "月 " + day + "日";
    option.value = date.toISOString(); // オプションの値としてISO 8601形式の日付を使用
    select.add(option);
  }
});
</script>
            <select class=" huj"name="name" id="name">
              <option  value="who">--- 午前--午後 ---</option>
              <option value="午前中">午前中</option>
              <option value="午後中">午後中</option>
             
            </select>
          </div>
    </div>
    <div class="clear"></div>
            <hr>
        <div class="left box"><p>配送方法</p></div>
        <div class="left box2"> <input type="radio"  name="q1"  value="通常配送">クレジットカード <br>
            <p1>+クレジットカードの追加</p1><div> 
            <input type="radio"  name="q1"  value="日時指定">コンビニ払い</div>
                
            
            
                
    </div>
    <div class="clear"></div>
      <!-- 他のコンテンツがここに入ります -->
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
<div class="contents">

<h5><strong>雛形ファイル</strong></h5>
※このファイルは雛形ファイルです。
</div>
<!-- /コンテンツ　-->
<?php 
//PHPブロック再開
	
	//--------------------------------------------------------------------------------------
	/*!
	@brief	デストラクタ
	*/
	//--------------------------------------------------------------------------------------
	
?>
