<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせ</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        
	        <?php include('../navbar.php'); ?>
<div class="all">
        <div class="main">
            <div class="box_left">
            </div>
            <div class="box_center">
                <div class="box_con05">
        <form method="post" action="mail.php">
        <ul class="formTable">
        <li>
            <p class="title"><em>性別</em></p>
            <div class="box_det">
                 <div class="box_br">
                     <label>
                       <input type="radio" name="gender" value="テキスト1">
                       男性
                    </label>
                </div>
                <div class="box_br">
                    <label>
                        <input type="radio" name="gender" value="テキスト2">
                        女性
                    </label>
                </div>
                <span>必須</span>
            </div>
          </li>
          <li>
            <p class="title"><em>お名前</em></p>
            <div class="box_det"><input size="20" type="text" class="wide" name="お名前" />
              <span>必須</span>
            </div>
          </li>
          <li>
            <p class="title"><em>電話番号（半角）</em></p>
            <div class="box_det"><input size="30" type="text" class="wide" name="電話番号" /><span>必須</span></div>
          </li>
          <li>
            <p class="title"><em>Mail（半角）</em></p>
            <div class="box_det"><input size="30" type="text" class="wide" name="Email" /><span>必須</span></div>
          </li>
          <li>
            <p class="title"><em>お問い合わせ内容</em></p>
            <div class="box_det"><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea><span>必須</span></div>
          </li>
        </ul>
        <div class="con_pri">
            <div class="box_pri">
                <div class="box_tori">
                    <h4>第1条（適用）</h4>
                    <p class="txt">1.本規約は，ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。
                        <br>2.当社は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下，「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。
                        <br>3.本規約の規定が前条の個別規定の規定と矛盾する場合には，個別規定において特段の定めなき限り，個別規定の規定が優先されるものとします。</p>
                </div>
                <div class="box_num">
                    <h4>第2条（本サービスの提供の停止等）</h4>
                    <p class="txt">1.本サービスにかかるコンピュータシステムの保守点検または更新を行う場合
                        <br>2.地震，落雷，火災，停電または天災などの不可抗力により，本サービスの提供が困難となった場合
                        <br>3.コンピュータまたは通信回線等が事故により停止した場合
                        <br>4.その他，当社が本サービスの提供が困難と判断した場合</p>
                </div>
                <div class="box_num">
                    <h4>第3条（サービス内容の変更等）</h4>
                    <p class="txt">当社は，ユーザーへの事前の告知をもって、本サービスの内容を変更、追加または廃止することがあり、ユーザーはこれを承諾するものとします。</p>
                </div>
                <div class="box_num">
                    <h4>第4条（個人情報の取扱い）</h4>
                    <p class="txt">本サービスの利用によって取得する個人情報については，「プライバシーポリシー」に従い適切に取り扱うものとします。</p>
                </div>
            </div>
        </div>
        <div class="box_check">
            <label>
                <input type="checkbox" name="acceptance-714" value="1" aria-invalid="false" class="agree"><span class="check">プライバシーポリシーに同意する</span>
            </label>
        </div>
        <p class="btn">
            <a href="../index2.php" class="btn btn--orange btn--cubic btn--shadow">送信！</a>
        </p>
      </form>
    </div>
            </div>
            <div class="box_right">
            </div>
        </div>
</div>
        <div class="footer">
        </div>
        <style>
            .box_center{
  overflow-y: scroll;
}
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {
  margin: 0;
  padding: 0;
}
address,caption,cite,code,dfn,em,strong,th,var {
  font-style: normal;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
caption,th {
  text-align: left;
}
q:before,q:after {
  content: '';
}
object,embed {
  vertical-align: top;
}
hr,legend {
  display: none;
}
h1,h2,h3,h4,h5,h6 {
  font-size: 100%;
}
img,abbr,acronym,fieldset {
  border: 0;
}
li {
  list-style-type: none;
}
sup {
  vertical-align: super;
  font-size: 0.5em;
}
img {
  vertical-align: top;
}
i {
  font-style: normal;
}
/*----リセットcss*----/

/*デザインcss↓*/
.box_con05 {
  max-width: 900px;
  margin: 0  auto;
}
@media only screen and (max-width: 768px) {
  .box_con05 {
    width: 95%;
  }
}
.box_con05 form {
  width: 100%;
}
.box_con05 form ul {
  width: 100%;
}
.box_con05 form ul li {
  position: relative;
  margin: .5em 0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
@media only screen and (min-width: 769px) {
  .box_con05 form ul li {
    display: -webkit-flex;
    display: flex;
  }
}
@media print {
  .box_con05 form ul li {
    display: -webkit-flex;
    display: flex;
  }
}
.ie8 .box_con05 form ul li {
  display: -webkit-flex;
  display: flex;
}
.box_con05 form ul li .title {
  position: relative;
  width: 30%;
  font-weight: normal;
  padding: 1em;
  position: relative;
}
@media only screen and (min-width: 769px) {
  .box_con05 form ul li .title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
  }
}
@media print {
  .box_con05 form ul li .title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
  }
}
.ie8 .box_con05 form ul li .title {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}
@media only screen and (max-width: 768px) {
  .box_con05 form ul li .title {
    text-align: center;
    width: 100%;
    display: block;
    padding: .8em .2em;
    background: #eee;
  }
}
.box_con05 form ul li .title em {
  position: relative;
  z-index: 1;
}
.box_con05 form ul li .box_det {
  width: 70%;
  position: relative;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
@media only screen and (max-width: 768px) {
  .box_con05 form ul li .box_det {
    display: block;
    width: 100%;
    padding: 1.5em .5em;
  }
}
.box_con05 form ul li .box_det span {
  border: 1px solid #cd6f55;
  padding: 0 .3em;
  color: #cd6f55;
  margin-left: .5em;
  position: absolute;
  top: .3em;
  right: .5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  border-radius: 20px;
}
@media only screen and (max-width: 768px) {
  .box_con05 form ul li .box_det span {
    top: 1.75em;
    right: 1em;
  }
}
.box_con05 form ul li .box_br {
  display: block;
}
.box_con05 form ul li select, .box_con05 form ul li textarea, .box_con05 form ul li .wide {
  width: 100%;
  height: 3em;
  padding: .5em 5.5em .5em 0.5em;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
@media only screen and (max-width: 768px) {
  .box_con05 form ul li select, .box_con05 form ul li textarea, .box_con05 form ul li .wide {
    padding: .5em 4.5em .5em 0.5em;
  }
}
.box_con05 form ul li textarea {
  height: 10em;
}

/*プライバシーのデザインcss↓*/
.con_pri {
  max-width: 700px;
  margin: 0  auto;
}
@media only screen and (max-width: 768px) {
  .con_pri {
    width: 95%;
  }
}
.con_pri .box_pri {
  height: 300px;
  overflow-y: scroll;
  border: 1px solid #cdcdcd;
  background: #f7f7f7;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin-top: 20px;
  padding: 20px 55px;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri {
    margin-top: 4%;
    padding: 3%;
  }
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  .con_pri .box_pri {
    padding: 4%;
  }
}
.con_pri .box_pri .box_tori {
  text-align: left;
  margin-top: 40px;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri .box_tori {
    margin-top: 4%;
  }
}
.con_pri .box_pri .box_tori h4 {
  font-weight: normal;
  margin-bottom: 30px;
  font-size: 150%;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri .box_tori h4 {
    margin-bottom: 4%;
  }
}
.con_pri .box_pri .box_tori .txt {
  padding: 0 20px;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri .box_tori .txt {
    padding: 0;
  }
}
.con_pri .box_pri .box_num {
  margin-top: 30px;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri .box_num {
    margin-top: 5%;
  }
}
.con_pri .box_pri .box_num h4 {
  font-weight: normal;
  font-size: 113%;
}
.con_pri .box_pri .box_num .txt {
  padding: 10px 0 0 20px;
}
@media only screen and (max-width: 768px) {
  .con_pri .box_pri .box_num .txt {
    padding: 3% 0 0 3%;
  }
}

.box_check {
  text-align: center;
  margin: 1em auto;
}
.box_check label {
  display: inline-block;
}
.box_check label span {
  margin-left: .3em;
}

.btn {
  text-align: center;
}
.btn input {
  display: inline-block;
  background: #eee;
  padding: .5em 4em;
  color: #000;
  text-decoration: none;
  cursor: pointer;
  border: none;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
}
.btn input:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
  opacity: 0.7;
 }
*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}
.btn,/*ボタンデザイン*/
a.btn,
button.btn {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn--orange {
  color: #fff;
  background-color: #eb6100;
  border-bottom: 5px solid #b84c00;
}
a.btn--orange:hover {
  margin-top: 3px;
  color: #fff;
  background: #f56500;
  border-bottom: 2px solid #b84c00;
}
a.btn--shadow {
  -webkit-box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
  box-shadow: 0 3px 5px rgba(0, 0, 0, .3);
}
        </style>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous">
            window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
