<style>
/* ▼メニューバーの装飾 */
ul.ddmenu {
   margin: 0px;               /* メニューバー外側の余白*/
   padding: 0px 0px 0px 15px; /* メニューバー内側の余白*/
   background-color: #808080; /* バーの背景色*/
}

/* ▼メインメニュー項目の装飾 */
ul.ddmenu li {
   width: 125px;           /*メニュー項目の横幅*/
   display: inline-block;  /*横並びに配置する */
   list-style-type: none;  /*リストの先頭記号を消す */
   position: relative;     /*サブメニュー表示の基準位置にする */
}
ul.ddmenu a {
   background-color:#808080; /* メニュー項目の背景色*/
   color: white;              /* メニュー項目の文字色*/
   line-height: 40px;         /* メニュー項目のリンクの高さ*/
   text-align: center;        /* メインメニューの文字列の配置(中央寄せ)*/
   text-decoration: none;     /* メニュー項目の装飾*/
   font-weight: bold;         /* 太字にする */
   display: block;            /* 項目内全域をリンク可能にする */
}
ul.ddmenu a:hover {
   background-color: #000000; /* メニュー項目にマウスが載ったときの背景色 */
   color: #C0C0C0;            /* メニュー項目にマウスが載ったときの文字色 */
}
/* ▼サブメニューの装飾 */
ul.ddmenu ul {
   display: none;       /*標準では非表示にする*/
   margin: 0px;         /*サブメニュー外側の余白*/
   padding: 0px;        /*サブメニュー内側の余白*/
   position: absolute;  /*絶対配置にする*/
}

/* ▼サブメニューがある場合に開く処理 */
ul.ddmenu li:hover ul {
   display: block;      /*マウスポインタが載っている項目の内部にあるリストを表示する*/
}
/* ▼サブメニュー項目の装飾 */
ul.ddmenu ul li {
   width: 135px;               /* サブメニュー1項目の横幅*/
   border-top: 1px solid pink; /* 項目上側の枠線*/
}
ul.ddmenu ul li a {
   line-height: 35px;   /* サブメニュー1項目の高さ*/
   text-align: left;    /* 文字列の配置 */
   padding-left: 5px;   /* 文字列前方の余白*/
   font-weight: normal; /* 太字にはしない*/
}
ul.ddmenu ul li a:hover {
   background-color: #ffff80; /* サブメニュー項目にマウスが載ったときの背景色*/
   color: #005500;            /* サブメニュー項目にマウスが載ったときの文字色*/
}
</style>

<ul class="ddmenu">
<<<<<<< HEAD
    <li><a href="/m20107/index2.php">HOME</a></li>
=======
   <li><a href="/Koutarot2021/index2.php">HOME</a></li>
>>>>>>> c6ffd1e (物)
   <li><a href="#">タロット</a>
      <ul>
         <li class="nav-item"><a class="nav-link" href="/Koutarot2021/tarot/loveluck.php">恋愛運</a></li>
            <li class="nav-item"><a class="nav-link" href="/Koutarot2021/tarot/careerluck.php">仕事運</a></li>
            <li class="nav-item"><a class="nav-link" href="/Koutarot2021/tarot/moneyluck.php">金運</a></li>
            <li class="nav-item"><a class="nav-link" href="/Koutarot2021/tarot/healthluck.php">健康運</a></li>
            <li class="nav-item"><a class="nav-link" href="/Koutarot2021/tarot/comprehensiveluck.php">総合運</a></li>
      </ul>
   </li>
   <li><a href="#">レトロ</a>
      <ul>
         <li><a href="/Koutarot2021/retrogame/invader.php">インベーダー</a></li>
         <li><a href="/Koutarot2021/retrogame/breakout.php">ブロック崩し</a></li>
      </ul>
   </li>
   <li><a href="#">お問い合わせ</a>
      <ul>
         <li><a href="/Koutarot2021/inquiry/questions.php">よくあるご質問</a></li>
         <li><a href="/Koutarot2021/inquiry/contactinformation.php">お問い合わせ先</a></li>
         <li><a href="/Koutarot2021/inquiry/credit.php">クレジット</a></li>
      </ul>
   </li>
</ul>