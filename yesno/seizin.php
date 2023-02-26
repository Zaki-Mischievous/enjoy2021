<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>YesNo占い</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
    integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>
<script>
 
  function hoge() {
 
    // 要素を取得
    var obj = document.getElementById("sample");
    
    // テキストを変更
    if (obj.textContent == "hello") {
      obj.textContent = "World!!";
    } else {
      obj.textContent = "hello";
    }
 
    // ボタンのテキストも変更
    var btn = document.getElementsByClassName("btn")[0];
    if (btn.textContent == "変更") {
      btn.textContent = "元に戻す";
    } else {
      btn.textContent = "変更";
    }
 
  }
 
</script>
    </head>
    <body>
	<?php include('../navbar.php'); ?>
<div class="all">
        <div class="main">
            <div class="box_left" style="background: url(../album/hurt.gif);background-position: center;background-repeat: no-repeat;background-color: #000000;" >
            </div>
            <div class="box_center" style="background: url(../album/usagi.gif);background-position: left bottom;background-repeat: no-repeat;background-color: #000000;" >
                <h1><font color="white">成人度</font></h1>
                <div class="box_yesno">
                <div class="view-top-yesno" style="background-color: #ffffff;">
                    <div class="blackboard question"><p><div id="area1">目立つのが大好き！</div></p></div>
                    <div class="clearfix">
                    <div class="blackboard answer float-r">
                    <p class="blink-before"><input type="button" value="ボタン" onclick="sample();"></p>
                    <p>いいえ</p>
                    </div>
                </div></div>
                <div class="view-bottom-yesno" style="background-color: #ffffff;">s</div>
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous">
                window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            </div>
            <div class="box_right" style="background: url(../album/hurt.gif);background-position: center;background-repeat: no-repeat;background-color: #000000;" >
            </div>
        </div>
            <div class="footer">
            </div>
</div>
        <style>
            /* 黒板 */
.blackboard {
 position: relative;
 margin: 0 auto 1.5rem;
 padding: 1.6rem 1rem;
 font-size: 1.2rem;
 color: #fff;
 border: 2px solid #000;
 border-radius: 5px;
 box-shadow: 0 0 0 4px #fff inset;
 background-color: rgba(0,0,0,0.9);
}
.blackboard.answer p {
 margin-left: 1.7rem;
}
.blackboard .blink-before {
 font-size: 1.2rem;
}
.blackboard a {
 text-decoration: none;
 color: #fff;
}
.blackboard .blink-before::before {
 content: '▶';
 position: absolute;
 left: 1rem;
 animation: blink 1.4s infinite;
}
.blackboard p:last-of-type {
 margin-bottom: 0;
}
/* 回り込み */
.float-r {
 float: right;
}
/* 回り込み解除 */
.clearfix {
 zoom: 1;
}
.clearfix:after {
 clear: both;
 content: "";
 display: block;
}
/* 点滅 */
@keyframes blink {
 50% { opacity: 0; }
}
@-webkit-keyframes blink {
 50% { opacity: 0; }
}
            </style>
    </body>
</html>