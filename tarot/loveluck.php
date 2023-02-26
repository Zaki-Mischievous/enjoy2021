<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タロット</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
	<?php include('../navbar.php'); ?>
<div class="all">
        <div class="main">
            <div class="box_left" style="background: url(../album/hurt.gif);background-position: center;background-repeat: no-repeat;background-color: #000000;" >
            </div>
            <div class="box_center" style="background: url(../album/usagi.gif);background-position: left bottom;background-repeat: no-repeat;background-color: #000000;" >
                <h1><font color="white">恋愛運</font></h1>
                <div class="box_tarot"><div class="view-left">
                    <form method="post">
                    <input type="submit" name="add" value="スタート" />
                </form>
                    </div><div class="view-right"style="background-color: #ffffff;">
                <?php 
                $card= array(0 => '愚者', 1 => '魔術師', 2 => '女教皇', 3 => '女帝', 4 => '皇帝', 5 => '法王', 6 => '恋人', 7 => '戦車', 8 => '力', 9 => '隠者', 10 => '運命の輪',
                11 => '正義', 12 => '吊るされた男', 13 => '死神', 14 => '節制', 15 => '悪魔', 16 => '塔', 17 => '星', 18 => '月', 19 => '太陽', 20 => '審判', 21 => '世界');
            //待機表示
            function image($gazou){
                if($gazou == 0){
                    ?><div id="ura"><img src="../album/card4.jpg" alt="裏面" width="250px" height="470"></div><?php
                }else{
                    ?><script>document.getElementById("ura").style.display = "none";</script><?php
                }
            }
            function closeBox() {
                ?><script>document.getElementById("buttonall").style.display = "block"; // ボックスを表示
                clearTimeout( Time );</script><?php
            }
            image(0);//初期裏面表示
                if(isset($_POST['add'])) {
                    image(1);
                    shuffle($card);
                    switch ($card[0]){
                        case "愚者":?>
                            <table><tr>
                                <td><img src="../album/0.jpg" alt="愚者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【愚者】</h1><br><h2>挑戦する気持ちを大事に！まだ始まってない人も運命を切り開くことができるタイミングです。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "魔術師":?>
                            <table><tr>
                                <td><img src="../album/1.jpg" alt="魔術師" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【魔術師】</h1><br><h2>ワクワクする恋！積極的にリードしていこう！ナンパもいいかもっ</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女教皇":?>
                            <table><tr>
                                <td><img src="../album/2.jpg" alt="女教皇" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女教皇】</h1><br><h2>あなたの直感を信じてみては？いいことがあるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女帝":?>
                            <table><tr>
                                <td><img src="../album/3.jpg" alt="女帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女帝】</h1><br><h2>あなたの想い人と相思相愛の可能性。今はすべての面で満たされて何ひとつ欠けているものがありません</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "皇帝":?>
                            <table><tr>
                                <td><img src="../album/4.jpg" alt="皇帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【皇帝】</h1><br><h2>あなたは現実的に考えてしまう節があるでしょう。が、計画的に行動するとなお良し</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "法王":?>
                            <table><tr>
                                <td><img src="../album/5.jpg" alt="法王" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【法王】</h1><br><h2>あなたは好きな人に好きといえないみっともない人間でしょう。あなたがそれをかえるきがなければ何も起こりません。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "恋人":?>
                            <table><tr>
                                <td><img src="../album/6.jpg" alt="恋人" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【恋人】</h1><br><h2>今日は告白をする時ではないようです。もう少し、あの人の気持ちが恋愛に傾いたときに告白したほうが、あなたが望むような答えがもらえるでしょう。もっと楽しむためには“今は深く追求しないこと”</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "戦車":?>
                            <table><tr>
                                <td><img src="../album/7.jpg" alt="戦車" width="250px"align="center"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【戦車】</h1><br><h2>本当にあっと言う間にあなたにとって望ましい方向に前進します。だからあなたから今行動する意味があるのです.困難があるでしょうが、自信を持ち試練を乗り越えましょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "力":?>
                            <table><tr>
                                <td><img src="../album/8.jpg" alt="力" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【力】</h1><br><h2>強引にいきましょう。やさしさいりません。思いを強く抱いて、時にメンヘラで行ってもいいかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "隠者":?>
                            <table><tr>
                                <td><img src="../album/9.jpg" alt="隠者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【隠者】</h1><br><h2>時間をかけてゆっくりと行くことで、関係がいつか花を咲かすでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "運命の輪":?>
                            <table><tr>
                                <td><img src="../album/10.jpg" alt="運命の輪" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【運命の輪】</h1><br><h2>別れがあるでしょう。後悔はしてはいけません、次の相手は運命の相手かも。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "正義":?>
                            <table><tr>
                                <td><img src="../album/11.jpg" alt="正義" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【正義】</h1><br><h2>バランスのとれた客観的な見方ができなければ、相手の言葉やメールを深読みしてしまったり、無駄に感情を消耗してしまうことに。対等な関係を築こう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "吊るされた男":?>
                            <table><tr>
                                <td><img src="../album/12.jpg" alt="吊るされた男" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【吊るされた男】</h1><br><h2>我慢が大事。じっとしてロ。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "死神":?>
                            <table><tr>
                                <td><img src="../album/13.jpg" alt="死神" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【死神】</h1><br><h2>お互いの関係が邪魔しているかも。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "節制":?>
                            <table><tr>
                                <td><img src="../album/14.jpg" alt="節制" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【節制】</h1><br><h2>今の関係を大事に、相手を思いやり、大切にしましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "悪魔":?>
                            <table><tr>
                                <td><img src="../album/15.jpg" alt="悪魔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【悪魔】</h1><br><h2>なんも言うことはありません。最悪な運勢です。でも一つだけ言うならば、一期一会を大切に</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "塔":?>
                            <table><tr>
                                <td><img src="../album/16.jpg" alt="塔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【塔】</h1><br><h2>これまで維持してきた関係があっという間に崩れ去るほどネガティブな衝撃です。ゴムをつけるようにしよう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "星":?>
                            <table><tr>
                                <td><img src="../album/17.jpg" alt="星" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【星】</h1><br><h2>あなたがあこがれを抱く相手といい感じになれます。でも、ちょうしこくなよ</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "月":?>
                            <table><tr>
                                <td><img src="../album/18.jpg" alt="月" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【月】</h1><br><h2>複数の相手からなかなか選べないくそやろーです</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "太陽":?>
                            <table><tr>
                                <td><img src="../album/19.jpg" alt="太陽" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【太陽】</h1><br><h2>出会いに恵まれることでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "審判":?>
                            <table><tr>
                                <td><img src="../album/20.jpg" alt="審判" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【審判】</h1><br><h2>半分あきらめていた関係が復縁できるかもしれません。状況はあなたが驚くほどスピーディに進展していくようです。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "世界":?>
                            <table><tr>
                                <td><img src="../album/21.jpg" alt="世界" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【世界】</h1><br><h2>しあわせなあなたは何もすることはない</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                    }
                }
                ?></div><div class="view-bottom"style="background-color: #808080;">
                </div>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous">
                window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
            <div class="box_right" style="background: url(../album/hurt.gif);background-position: center;background-repeat: no-repeat;background-color: #000000;" >
            </div>
        </div>
            <div class="footer">
            </div>
</div>
    </body>
</html>