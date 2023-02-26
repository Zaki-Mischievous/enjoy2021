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
            <div class="box_left"style="background: url(../album/tuki.jpg);">
            </div>
            <div class="box_center" style="background-color: #000000;">
                <h1><font color="white">仕事運</font></h1>
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
                    ?><div id="ura"><img src="../album/card1.jpg" alt="裏面" width="250px" height="470"></div><?php
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
                                <td><p><h1>【愚者】</h1><br><h2>独創的なアイデアをお持ちのあなたは独立し企業したほうがいい</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "魔術師":?>
                            <table><tr>
                                <td><img src="../album/1.jpg" alt="魔術師" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【魔術師】</h1><br><h2>あなたは何事にも意欲的に取り組むことができます。奇跡のような結果を得られるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女教皇":?>
                            <table><tr>
                                <td><img src="../album/2.jpg" alt="女教皇" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女教皇】</h1><br><h2>知識を活かす仕事が向いています。勉強を頑張りましょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女帝":?>
                            <table><tr>
                                <td><img src="../album/3.jpg" alt="女帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女帝】</h1><br><h2>あなたは社交的な人です。才気があり、成長が期待できます。クリエイティブな仕事がおすすめ</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "皇帝":?>
                            <table><tr>
                                <td><img src="../album/4.jpg" alt="皇帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【皇帝】</h1><br><h2>あなたは出世するタイプです。力強いリーダシップを発揮し成長し続けるでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "法王":?>
                            <table><tr>
                                <td><img src="../album/5.jpg" alt="法王" width="250px"></td>
                                <td>&nbsp;</td>
                               　<td><p><h1>【法王】</h1><br><h2>あなたは人に頼られる存在。相談に乗りすぎると自分の仕事に支障が応じるかも！</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "恋人":?>
                            <table><tr>
                                <td><img src="../album/6.jpg" alt="恋人" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【恋人】</h1><br><h2>あなたはおしゃべり上手！皆からの信頼が厚い。営業に向いてるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "戦車":?>
                            <table><tr>
                                <td><img src="../album/7.jpg" alt="戦車" width="250px"align="center"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【戦車】</h1><br><h2>あなたは負けず嫌いな性格。やる気がありすぎて空回り。時には自分を抑えることも大事！</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "力":?>
                            <table><tr>
                                <td><img src="../album/8.jpg" alt="力" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【力】</h1><br><h2>あなたは臨機応変に対応できる優れた人物です。問題があっても状況を理解しその場をコントロールでき落ち着いた対応ができます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "隠者":?>
                            <table><tr>
                                <td><img src="../album/9.jpg" alt="隠者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【隠者】</h1><br><h2>あなたは物事に没頭しすぎて周りが見えなくなる傾向があります。社内でのコミュニケーションを大切に！</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "運命の輪":?>
                            <table><tr>
                                <td><img src="../album/10.jpg" alt="運命の輪" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【運命の輪】</h1><br><h2>あなたはとても運がいい。トラブルが都合の良いほうに転がり、昇格できるチャンス！</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "正義":?>
                            <table><tr>
                                <td><img src="../album/11.jpg" alt="正義" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【正義】</h1><br><h2>あなたはとても器用な人。副業の方が成功するかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "吊るされた男":?>
                            <table><tr>
                                <td><img src="../album/12.jpg" alt="吊るされた男" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【吊るされた男】</h1><br><h2>あなたはとてもプライドが高い人。こだわりを捨てましょう。このままだと干されます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "死神":?>
                            <table><tr>
                                <td><img src="../album/13.jpg" alt="死神" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【死神】</h1><br><h2>仕事の停滞。失敗を恐れ動かなければ進展がなく変化がありません。まず、動き出しましょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "節制":?>
                            <table><tr>
                                <td><img src="../album/14.jpg" alt="節制" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【節制】</h1><br><h2>あなたは妥協する時期。仲間と協力し助け合うことであなたの能力が発揮され、今よりもスムーズに仕事が行えるでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "悪魔":?>
                            <table><tr>
                                <td><img src="../album/15.jpg" alt="悪魔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【悪魔】</h1><br><h2>あなたはこれから生活が苦しくなります。友人に騙されプライベートを削ってまで働かされます。友人に気を付けましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "塔":?>
                            <table><tr>
                                <td><img src="../album/16.jpg" alt="塔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【塔】</h1><br><h2>身内の裏切りにより、目標達成が困難に！責任を負わされリストラされるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "星":?>
                            <table><tr>
                                <td><img src="../album/17.jpg" alt="星" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【星】</h1><br><h2>才能が開花！！直感を信じて目標達成。天狗になると大変なことに</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "月":?>
                            <table><tr>
                                <td><img src="../album/18.jpg" alt="月" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【月】</h1><br><h2>あなたは不器用な人。成功や努力を評価してもらえず、辛い運命が待ち受けてるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "太陽":?>
                            <table><tr>
                                <td><img src="../album/19.jpg" alt="太陽" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【太陽】</h1><br><h2>あなたの成績が伸び評価され、無茶な要求や意見が通りやすくなるかも。やってみたいことを提案してみたら？</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "審判":?>
                            <table><tr>
                                <td><img src="../album/20.jpg" alt="審判" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【審判】</h1><br><h2>心機一転！努力が報われ、昇格するでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "世界":?>
                            <table><tr>
                                <td><img src="../album/21.jpg" alt="世界" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【世界】</h1><br><h2>あなたは人気者。何事にもうまくいきます。どんどんチャレンジしてみましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                    }
                }
                ?></div>
                
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous">
                window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
                </div>
            </div>
            <div class="box_right"style="background: url(../album/cat2_1.jpg);">
            </div>
        </div>
            <div class="footer">
            </div>
</div>
    </body>
</html>