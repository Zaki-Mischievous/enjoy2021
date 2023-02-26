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
            <div class="box_left" style="background: url(../album/retu.gif);background-position: left;background-repeat: no-repeat;background-color: #ffcc99;" >
            </div>
            <div class="box_center" style="background: url(../album/moneyman.jpg);background-position: bottom;">
                <h1>金運</h1>
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
                    ?><div id="ura"><img src="../album/cath.png" alt="裏面" width="250px" height="470"></div><?php
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
                                <td><p><h1>【愚者】</h1><br><h2>収入にこだわらないで、直感的にお金を使っていったほうがいい</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "魔術師":?>
                            <table><tr>
                                <td><img src="../album/1.jpg" alt="魔術師" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【魔術師】</h1><br><h2>あなたはお金のやりくりが上手な性格を持つので、投資や副業を始めるとよいでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女教皇":?>
                            <table><tr>
                                <td><img src="../album/2.jpg" alt="女教皇" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女教皇】</h1><br><h2>今はコツコツと堅実にお金を増やすことを重視したほうがよいでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女帝":?>
                            <table><tr>
                                <td><img src="../album/3.jpg" alt="女帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女帝】</h1><br><h2>近いうちに	収入アップの予感があるでしょう。貯金をためて将来リッチな生活が望めるでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "皇帝":?>
                            <table><tr>
                                <td><img src="../album/4.jpg" alt="皇帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【皇帝】</h1><br><h2>近いうちに	大幅に収入アップの予感があるでしょう。ただしギャンブルに走ると痛い目を見かねません</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "法王":?>
                            <table><tr>
                                <td><img src="../album/5.jpg" alt="法王" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【法王】</h1><br><h2>あなたは、安定した収入を得ます。なので、計画性のある運用が求められます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "恋人":?>
                            <table><tr>
                                <td><img src="../album/6.jpg" alt="恋人" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【恋人】</h1><br><h2>散財をせず、無理をせず割り勘をし、将来楽して収入を得ることができるでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "戦車":?>
                            <table><tr>
                                <td><img src="../album/7.jpg" alt="戦車" width="250px"align="center"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【戦車】</h1><br><h2>あなたの努力した分報酬を得ることができます。ギャンブルへの期待が大吉です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "力":?>
                            <table><tr>
                                <td><img src="../album/8.jpg" alt="力" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【力】</h1><br><h2>あなたの力次第で報酬がもらえるでしょう。コツコツ貯金が大切です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "隠者":?>
                            <table><tr>
                                <td><img src="../album/9.jpg" alt="隠者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【隠者】</h1><br><h2>平凡なあなたは、冒険はしないほうがよいでしょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "運命の輪":?>
                            <table><tr>
                                <td><img src="../album/10.jpg" alt="運命の輪" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【運命の輪】</h1><br><h2>昇給により生活のレベルが向上されますが、使い過ぎやギャンブルは、不運を引き連れます</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "正義":?>
                            <table><tr>
                                <td><img src="../album/11.jpg" alt="正義" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【正義】</h1><br><h2>バランスがいいだけで、面白い収入が得られないでしょう。たまには勝負に出てみては？</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "吊るされた男":?>
                            <table><tr>
                                <td><img src="../album/12.jpg" alt="吊るされた男" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【吊るされた男】</h1><br><h2>あなたは金には恵まれないでしょう
				お金を手に入れたい→<a href="../sagi/oto.php">https//www.rich.co.jp/</a></h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "死神":?>
                            <table><tr>
                                <td><img src="../album/13.jpg" alt="死神" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【死神】</h1><br><h2>破産、破産、破産、破産、破産
				お金を手に入れたい→<a href="../sagi/oto.php">https//www.ace.ac.jp/</a></h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "節制":?>
                            <table><tr>
                                <td><img src="../album/14.jpg" alt="節制" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【節制】</h1><br><h2>適度な節約としっかりした暮らしが求められる</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "悪魔":?>
                            <table><tr>
                                <td><img src="../album/15.jpg" alt="悪魔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【悪魔】</h1><br><h2>ギャンブル、詐欺、すべてに注意しなければ借金地獄が待っています。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "塔":?>
                            <table><tr>
                                <td><img src="../album/16.jpg" alt="塔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【塔】</h1><br><h2>あなたのやさしさに付け込んだ人が寄ってきても、借金の肩代わりをすることを断ろう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "星":?>
                            <table><tr>
                                <td><img src="../album/17.jpg" alt="星" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【星】</h1><br><h2>長期的に計画を進める事業が金運のアップにつながります。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "月":?>
                            <table><tr>
                                <td><img src="../album/18.jpg" alt="月" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【月】</h1><br><h2>あやふやな金銭感覚を捨て、節約をしてみよう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "太陽":?>
                            <table><tr>
                                <td><img src="../album/19.jpg" alt="太陽" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【太陽】</h1><br><h2>こつこつと進んできたものが臨時収入へと導いてくれます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "審判":?>
                            <table><tr>
                                <td><img src="../album/20.jpg" alt="審判" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【審判】</h1><br><h2>近いうちに	収入アップの予感があるでしょう。貯金をためて将来リッチな生活が望めるでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "世界":?>
                            <table><tr>
                                <td><img src="../album/21.jpg" alt="世界" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【世界】</h1><br><h2>金運に大いに恵まれるでしょう、今のうちに遺産を残しておくべきである</h2></p></td>
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
            <div class="box_right" style="background: url(../album/retu.gif);background-position: right;background-repeat: no-repeat;background-color: #ffcc99;">
            </div>
        </div>
            <div class="footer">
            </div>
</div>
    </body>
</html>