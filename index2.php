<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
=======


>>>>>>> c6ffd1e (物)
</head>
<body>
    <div class="wrapper-no7">
        <div class="logo">GAMECLUB</div>
        <div class="animation-wrapper">
            <div class="cat-wrapper";>
                <svg class="cat" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 207.68 163.77" preserveAspectRatio="none">
                <title>cat</title>
                <g class="body">
                <circle class="body-backcircle" cx="76.86" cy="83.31" r="45.5"/>
                <circle class="body-frontcircle" cx="150.86" cy="83.31" r="45.5"/>
                <rect class="body-between"x="74.65" y="37.89" width="83.04" height="90.61"/>
                </g>
                <circle class="head" cx="161.76" cy="52.75" r="45.92"/>
                <g class="eyes">
                <circle class="eyes-l" cx="153.51" cy="46.5" r="8.25"/>
                <circle class="eyes-r" cx="185.76" cy="46.5" r="8.25"/>
                </g>
                <g class="ears">
                <polygon class="ears-l" points="132.76 19 132.76 0 149.55 8.81 132.76 19"/>
                <polygon class="ears-r" points="179.44 11.2 197 4.06 195.16 22.9 179.44 11.2"/>
                </g>
                <rect class="tail" x="-11" y="32.87" width="107" height="20" rx="9.58" ry="9.58" transform="translate(41.19 -18.41) rotate(45)"/>
                <g class="backlegs">
                <path class="backlegs1" d="M74,124.85a6,6,0,0,0-4.7-7.07l-4.41-.89a6,6,0,0,0-7.07,4.7l-6.31,31.35a8.25,8.25,0,1,0,15.64,5,5.94,5.94,0,0,0,.44-1.33Z" transform="translate(-1.58 -0.92)"/>
                <path class="backlegs2" d="M88.22,125.86a6,6,0,0,0-4.38-7.27l-4.37-1.08a6,6,0,0,0-7.27,4.38l-7.69,31a8.25,8.25,0,1,0,15.41,5.72,5.94,5.94,0,0,0,.5-1.31Z" transform="translate(-1.58 -0.92)"/>
                </g>
                <g class="frontlegs">
                <path class="frontlegs1" d="M162.89,120.91a6,6,0,0,0-7.65-3.68L151,118.72a6,6,0,0,0-3.68,7.65l10.57,30.18a8.25,8.25,0,1,0,16-3.65,5.94,5.94,0,0,0-.3-1.37Z" transform="translate(-1.58 -0.92)"/>
                <path class="frontlegs2" d="M175.77,120.08a6,6,0,0,0-7.48-4l-4.31,1.3a6,6,0,0,0-4,7.48l9.22,30.62a8.25,8.25,0,1,0,16.17-2.94,5.94,5.94,0,0,0-.24-1.38Z" transform="translate(-1.58 -0.92)"/>
                </g>
                </svg>
            </div>
            <div class="logoani">GAME</div>
        </div>
        <div class="layout notvisible">
            <div class="layout__nav">
                <ul class="layout__nav-left">

                </ul>
                <ul class="layout__nav-right">

                </ul>

            </div>
            <div class="layout__title"></div>

            <div class="layout__content">
                <!--テーブル-->
                <table>    

                    <tr>　<th><div class="name">タロット</div></th>　<th><div class="name">レトロ</div></th></tr>
                    <tr>
                        <td> <a class="nav-link" href="/Koutarot2021/tarot/loveluck.php">恋愛運</a>　</td>
        　　　　<td> <a href="/Koutarot/retrogame/invader.php">インベーダー</a></td>
       　　 </tr>
       　　 <tr>
                        <td> <a class="nav-link" href="/Koutarot2021/tarot/careerluck.php">仕事運</a>　</td>
        　　　　<td>　<a href="/Koutarot2021/retrogame/breakout.php">ブロック崩し</a>　</td>
       　　 </tr> 
                    <tr>
                        <td><a class="nav-link" href="/Koutarot2021/tarot/moneyluck.php">金運</a>　</td>
　　　　　　　</tr>
                    <tr>
                        <td><a class="nav-link" href="/Koutarot2021/tarot/healthluck.php">健康運</a>　</td>
　　　　　　　</tr>
                    <tr>
                        <td><a class="nav-link" href="/Koutarot2021/tarot/comprehensiveluck.php">総合運</a></td>
                    </tr>

                    <tr>
                        <th>
                            <div class="name">お問い合わせ</div>
                        </th>
                    </tr>
                    <tr>
                        <td><a href="/Koutarot2021/inquiry/questions.php">よくあるご質問</a></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/Koutarot2021/inquiry/contactinformation.php">お問い合わせ先</a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="/Koutarot2021/inquiry/credit.php">クレジット</a></td>
                    </tr>

                </table>

            </div>
        </div>
        <button class="restart">アニメーション</button>
    </div>
    <style>
        body {
            height: 100vh;
            font-family: "Delius Swash Caps", cursive;
            text-align: center;
            /*文字の色*/
            color: #004466;
            /*  背景の色
            */  background-image:url(./album/color.jpg);
            /*  background:url(../album/neko2.jpg);*/
            /*background: #ffffff;*/
            display: flex;
            align-items: center;
            justify-content: center;

        }
        /*もともとあったやつ*/
        body table{
            margin: 0px;
            padding: 0px;
            width: 10em;
        }
        /*追加*/
        table th{
            padding: 10px;
            margin : 10px;

        }
        .name{

            font-size: 30px;
            padding: 0.5em;/*文字周りの余白*/
            padding-bottom: 1em;
            color: #010101;/*文字色*/
            background: #eaf3ff;/*背景色*/
            border-bottom: solid 3px #516ab6;/*下線*/
        }

        table td a{
            font-size:35px; 
        }
        table td a:hover{
            color: #FF0000;
            font-size: 35px;
        }
        table td a:visited{
            color: #CC99FF;
            font-size: 35px;
        }
        
        .wrapper-no7 {
            display: flex;
            justify-content: center;

        }
        .wrapper-no7 .animation-wrapper {
            display: flex;
        }
        .wrapper-no7 .animation-wrapper.notvisible {
            display: none;
        }
        .wrapper-no7 .cat {
            width: 80%;
            overflow: visible;
        }
        .wrapper-no7 .cat-wrapper {
            width: 300px;
        }
        .wrapper-no7 .eyes circle {
            /*猫の目の色*/
            fill: #fff;
        }
        .wrapper-no7 .frontlegs,
        .wrapper-no7 .backlegs {
            opacity: 1;
        }
        .wrapper-no7 .logoani {
            align-self: flex-end;
            margin-left: -25px;
            font-size: 45px;
        }
        /*GAME同窓会　大きさ*/
        .wrapper-no7 .logo {
            font-size: 80px;
            opacity: 0;
            position: absolute;
            top: -40px;
        }
        /*GAME同窓会　位置　動き*/
        .wrapper-no7 .logo.visible {
            opacity: 1;
            top: 40px;
            left: 200px;
            transition: all 1s;
        }
        .wrapper-no7 .cat.visible {
            position:absolute;
            opacity: 1;
            top: 40px;
            transition: all 1s;
        }
        /*戻りボタン*/
        .wrapper-no7 .restart {
            display: none;
            font-size: 20px;
            /*絶対位置*/
            position: absolute;
            top: 90%;
            padding:  20px;
            right:  40px;     

            /*戻りボタンの中の色*/
            background-color: white;
            /*戻るボタンの枠色*/
            border: #bbbbbb 1px solid;
            box-shadow: none;
            padding: 20px;
            border-radius: 10px;
        }
        .wrapper-no7 .restart:hover {
            background-color: #ddd;
        }
        /*戻りボタン表示*/
        .wrapper-no7 .restart.visible {
            display: block;
        }
        /*ホームページ自体*/
        .wrapper-no7 .layout {
            display: block;
            opacity: 1;
            width: 80%;
            position: absolute;
            top: 40px;
            transition: opacity 1s;
        }
        .wrapper-no7 .layout.notvisible {
            display: none;
            opacity: 0;
        }
        /*上の棒*/
        .wrapper-no7 .layout li {
            height: 20px;

        }
        .wrapper-no7 .layout ul {
            display: flex;
            margin: 0;
            padding: 0;
        }
        .wrapper-no7 .layout li {
            width: 10em;
            margin-left: 20px;
            list-style: none;

        }
        .wrapper-no7 .layout .layout__nav {
            display: flex;
            justify-content: space-between;
        }
        .wrapper-no7 .layout .layout__nav-left,
        .wrapper-no7 .layout .layout__nav-right {

        }
        .wrapper-no7 .layout .layout__nav-left li:first-child {

        }
        .wrapper-no7 .layout .layout__nav-right {

        }

        /*太い棒*/
        /*.wrapper-no7 .layout .layout__title {
          width: 80%;
          height: 40px;
          background-color: #bbbbbb;
          margin-top: 150px;
          margin-left: auto;
          margin-right: auto;
        }*/
        .wrapper-no7 .layout .layout__content {
            display: flex;
            justify-content: space-evenly;;
            flex-direction: column;
            align-items: stretch;
        }
        /*下の棒全部*/
        .wrapper-no7 .layout .layout__content li {
            width: 10em;
            flex-direction: column;
        }
        .wrapper-no7 .layout .layout__content div {
            /*横幅*/
            width: 10em;
            /*線幅*/
            height: 20px;
            /*棒の色*/

            margin-top: 40px;
            flex-direction: column;

        }
        /*太い線と細い線の間の間隔*/
        .wrapper-no7 .layout .layout__content div:first-child {
            margin-top: 100px;
            flex-direction: column;
        }
        @media screen and (max-width: 500px) {
            .wrapper-no7 .layout {
                width: 100%;
            }
            .wrapper-no7 .layout .layout__nav,
            .wrapper-no7 .layout .layout__nav-left,
            .wrapper-no7 .layout .layout__nav-right {
                display: none;
            }
            .wrapper-no7 .layout .layout__title {
                margin-top: 100px;
            }
            .wrapper-no7 .layout .layout__content div:first-child {
                margin-top: 40px;
                flex-direction: column;
            }
        }
        @media screen and (max-width: 768px) {
            .wrapper-no7 .layout {
                width: 100%;
            }
            .wrapper-no7 .layout .layout__title {
                margin-top: 100px;
            }
            .wrapper-no7 .layout .layout__content div:first-child {
                margin-top: 40px;
                flex-direction: column;
            }
            .wrapper-no7 .layout .layout__title {
                margin-top: 70px;
            }
            .wrapper-no7 .layout .layout__nav {
                margin-top: 20px;
            }
            .wrapper-no7 .layout .layout__nav-left,
            .wrapper-no7 .layout .layout__nav-right {

            }
            .wrapper-no7 .logo {
                font-size: 45px;
            }
        }
    </style>
    <script type="text/javascript">
        //    import { TweenMax, TimelineMax } from 'gsap'

        document.addEventListener("DOMContentLoaded", function () {
            const cat = document.querySelector('.cat');
            const body = document.querySelector('.body');
            const head = document.querySelector('.head');
            const eyes = document.querySelectorAll('.eyes circle');
            const eyel = document.querySelectorAll('.eyes-l');
            const eyer = document.querySelectorAll('.eyes-r');
            const ears = document.querySelectorAll('.ears');
            const earsl = document.querySelector('.ears-l');
            const earsr = document.querySelector('.ears-r');
            const tail = document.querySelector('.tail');
            const backlegs = document.querySelector('.backlegs');
            const frontlegs = document.querySelector('.frontlegs');
            const frontlegs1 = document.querySelector('.frontlegs1');
            const backcircle = document.querySelector('.body-backcircle');
            const frontcircle = document.querySelector('.body-frontcircle');
            const bodybetween = document.querySelector('.body-between');
            const logo = document.querySelector('.logoani');
            const logofix = document.querySelector('.logo');
            const resetbutton = document.querySelector('.restart');
            const ani = document.querySelector('.animation-wrapper');
            const layout = document.querySelector('.layout');
            //start-animation



            function initAni() {
                const tl = new TimelineMax({delay: 0.5, onComplete: logoVisible});
                const tl_eye = new TimelineMax({delay: 1.5, repeat: 3, repeatDelay: 1});
                resetit();
                logonotVisible();
                tl.to([head, eyes, ears], 0.2, {y: 45, x: 30})
                        .addLabel("twink")
                        .to(eyel, 0.1, {scaleY: 1, y: 45}, "twink-=0.1")
                        .to(eyel, 0.1, {scaleY: 0.1, y: 55}, "twink")
                        .to(eyel, 0.1, {scaleY: 1, y: 45}, "twink +=0.1")
                        .to(eyer, 0.1, {scaleY: 0.1, y: 55}, "twink")
                        .to(eyer, 0.1, {scaleY: 1, y: 45}, "twink +=0.1")
                        .to(earsl, 0.1, {y: 8, x: -5, rotation: -20}, "twink +=0.1")
                        .to(earsr, 0.1, {y: 16, x: -15, rotation: -60}, "twink +=0.1")
                        .set(frontlegs, {opacity: 1}, "+=0.5")
                        .to(frontlegs1, 0.1, {y: 35, x: 15, rotation: -60})
                        .to(logo, 0.1, {x: 5})
                        .to(frontlegs1, 0.1, {y: 35, x: 5, rotation: -60})
                        .to(frontlegs1, 0.1, {y: 35, x: 15, rotation: -60})
                        .to(logo, 0.3, {x: 10})
                        .to(frontlegs1, 0.1, {y: 35, x: -5, rotation: -60})
                        .to(frontlegs1, 0.1, {y: 35, x: 25, rotation: -60}, "+=0.5")
                        .to(logo, 0.1, {x: 12})
                        .to(frontlegs1, 0.1, {y: 35, x: 5, rotation: -60})
                        .to(frontlegs1, 0.1, {y: 35, x: 25, rotation: -60})
                        .to(logo, 0.3, {x: 17})
                        .to(frontlegs1, 0.1, {y: 35, x: -5, rotation: -60})
                        .to(frontlegs1, 0.1, {y: 35, x: 35, rotation: -60})
                        .to(logo, 0.1, {x: 20})
                        .to(frontlegs1, 0.1, {y: 35, x: -5, rotation: -60})
                        .to(frontlegs1, 0.1, {y: 30, x: 30, rotation: -60, scaleY: 1.2})
                        .to(logo, 0.5, {x: 30})
                        .to(logo, 0.1, {rotation: 10})
                        .to(frontlegs1, 0.1, {y: 35, x: -15, rotation: -60, scaleY: 1})
                        .addLabel("wiggle")
                        .to([head, eyes, ears], 0.1, {y: 48}, "wiggle")
                        .to(earsl, 0.1, {y: 10, x: -5, rotation: -20}, "wiggle")
                        .to(earsr, 0.1, {y: 18, x: -15, rotation: -60}, "wiggle")
                        .to(backcircle, 0.1, {y: 30, x: 40}, "wiggle =-0.2")
                        .to(backcircle, 0.1, {y: 30, x: 37}, "wiggle =-0.1")
                        .to(backcircle, 0.1, {y: 35, x: 40}, "wiggle")
                        .to(backcircle, 0.1, {y: 30, x: 40})
                        .to(backcircle, 0.1, {y: 30, x: 37})
                        .to(backcircle, 0.1, {y: 35, x: 40})
                        .to(backcircle, 0.1, {y: 30, x: 40})
                        .to(backcircle, 0.1, {y: 30, x: 37})
                        .to(backcircle, 0.1, {y: 35, x: 40})
                        .addLabel("logowiggle")
                        .to(frontlegs1, 0.1, {y: 35, x: 30, rotation: -60, scaleY: 1.25}, "logowiggle-=0.1")
                        .to(logo, 0.1, {rotation: 60, x: 70}, "logowiggle")
                        .to(logo, 0.5, {y: 50}, "logowiggle+=0.1")
                        .to(logo, 0.1, {rotation: 120}, "logowiggle+=0.1")
                        .to(logo, 0.1, {rotation: 270}, "logowiggle+=0.2")
                        .to(logo, 0.5, {y: 550, x: 90}, "logowiggle+=0.2")
                        .to(logo, 0.5, {opacity: 0}, "logowiggle")
                        .to(frontlegs1, 0.1, {y: 35, x: -15, rotation: -60, scaleY: 1})
                        .addLabel("jump")
                        .to([head, eyes, ears], 0.1, {y: 5}, "jump")
                        .to(frontcircle, 0.1, {y: 15, x: 5}, "jump")
                        .to(bodybetween, 0.1, {rotation: -25, x: 25, y: 38}, "jump")
                        .to(frontlegs1, 0.1, {y: 0, x: 0, rotation: 0}, "jump")
                        .to(tail, 0.1, {y: 115, x: 20, rotation: -10}, "jump")
                        .to(frontlegs, 0.1, {y: -20}, "jump+=0.1")

                        .to([head, eyes, ears, frontcircle], 0.1, {x: 75, y: 5}, "jump+=0.2")
                        .to(frontcircle, 0.1, {x: 55, y: 5}, "jump+=0.2")
                        .to(bodybetween, 0.1, {scaleX: 1, x: 45, y: 25, rotation: -15}, "jump+=0.2")
                        .to(backcircle, 0.1, {x: 50, y: 25}, "jump+=0.2")
                        .to(backlegs, 0.1, {x: 70}, "jump+=0.2")

                        .to(frontlegs, 0.1, {x: 250, y: 5, rotation: -45}, "jump+=0.3")
                        .to(frontcircle, 0.1, {x: 250}, "jump+=0.3")
                        .to(backcircle, 0.1, {y: 0, x: 250}, "jump+=0.3")
                        .to(bodybetween, 0.1, {y: 0, x: 255, scaleX: 1, rotation: 4}, "jump+=0.3")
                        .to([head, eyes, ears], 0.1, {x: 275}, "jump+=0.3")
                        .to(tail, 0.1, {y: 25, x: 230, rotation: 15}, "jump+=0.3")
                        .to(backlegs, 0.1, {rotation: 45, x: 250, y: -25}, "jump+=0.3")

                        .to(frontlegs, 0.1, {x: 340, y: 105, rotation: -15}, "jump+=0.4")
                        .to(frontcircle, 0.1, {x: 340, y: 105}, "jump+=0.4")
                        .to(backcircle, 0.1, {y: 60, x: 350}, "jump+=0.4")
                        .to(bodybetween, 0.1, {y: 70, x: 380, scaleX: 1, rotation: 35}, "jump+=0.4")
                        .to([head, eyes, ears], 0.1, {x: 385, y: 125}, "jump+=0.4")
                        .to(tail, 0.1, {y: 50, x: 370, rotation: 35}, "jump+=0.4")
                        .to(backlegs, 0.1, {rotation: 95, x: 350, y: 5}, "jump+=0.4")

                        .to(frontlegs, 0.1, {x: 420, y: 205, rotation: -15}, "jump+=0.5")
                        .to(frontcircle, 0.1, {x: 420, y: 205}, "jump+=0.5")
                        .to(backcircle, 0.1, {y: 160, x: 430}, "jump+=0.5")
                        .to(bodybetween, 0.1, {y: 170, x: 460, scaleX: 1, rotation: 35}, "jump+=0.5")
                        .to([head, eyes, ears], 0.1, {x: 465, y: 225}, "jump+=0.5")
                        .to(tail, 0.1, {y: 150, x: 450, rotation: 35}, "jump+=0.5")
                        .to(backlegs, 0.1, {rotation: 95, x: 430, y: 95}, "jump+=0.5")

                        .to(cat, 0.5, {opacity: 0}, "jump+=0.3");
                //cat blinking
                tl_eye.addLabel("twinkall")
                        .to(eyel, 0.1, {scaleY: 0.1, y: 55}, "twinkall")
                        .to(eyel, 0.1, {scaleY: 1, y: 45}, "twinkall +=0.1")
                        .to(eyer, 0.1, {scaleY: 0.1, y: 55}, "twinkall")
                        .to(eyer, 0.1, {scaleY: 1, y: 45}, "twinkall +=0.1");
            }
            function replace(_callback) {
                // do some asynchronus work 
                _callback();
            }

            function logoVisible() {
                logofix.classList.add("visible");
                resetbutton.classList.add('visible');
                ani.classList.add("notvisible");
                layout.classList.remove("notvisible");
                replace(() => {
                    const mainVisualBgArea = document.querySelector('body');
                    $image = "./album/neko2.jpg"
                    mainVisualBgArea.style.backgroundImage = 'url(' + $image + ')';
                });
            }
            function logonotVisible() {
                logofix.classList.remove("visible");
                resetbutton.classList.remove('visible');
                ani.classList.remove("notvisible");
                layout.classList.add("notvisible");
            }
            function resetit() {
                TweenMax.set([head, eyes, ears], {y: 20, x: 30});
                TweenMax.set(backcircle, {y: 35, x: 40});
                TweenMax.set(cat, {opacity: 1});
                TweenMax.set(bodybetween, {scaleX: 0.5, y: 35, x: 45, rotation: 0});
                TweenMax.set(frontcircle, {y: 35, x: 10});
                TweenMax.set(head, {y: 20});
                TweenMax.set(eyel, {scaleY: 1});
                TweenMax.set(eyer, {scaleY: 1});
                TweenMax.set(ears, {y: 20});
                TweenMax.set(tail, {y: 110, x: 30, rotation: 0});
                TweenMax.set(backlegs, {rotation: -100, y: 55, x: 50});
                TweenMax.set(frontlegs, {y: 0, x: 0, rotation: 0});
                TweenMax.set(logo, {opacity: 1, x: 0, y: 0, rotation: 0});
                TweenMax.set(earsl, {x: 0, y: 0, rotation: 0});
                TweenMax.set(earsr, {x: 0, y: 0, rotation: 0});
            }




            initAni();
            resetbutton.addEventListener("click", initAni);
        });
//        
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!--<script src="replace.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>