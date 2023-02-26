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
            <div class="box_left"style="background: url(../album/paca.gif);">
            </div>
            <div class="box_center"style="background: url(../album/file.gif);">
                <h1>総合運</h1>
                <div class="box_tarot"><div class="view-left">
                <form method="post">
                    <input type="submit" name="add" value="スタート" />
                </form>
                    </div><div class="view-right">
                <?php 
                $card= array(0 => '愚者', 1 => '魔術師', 2 => '女教皇', 3 => '女帝', 4 => '皇帝', 5 => '法王', 6 => '恋人', 7 => '戦車', 8 => '力', 9 => '隠者', 10 => '運命の輪',
                11 => '正義', 12 => '吊るされた男', 13 => '死神', 14 => '節制', 15 => '悪魔', 16 => '塔', 17 => '星', 18 => '月', 19 => '太陽', 20 => '審判', 21 => '世界');
            //待機表示
            function image($gazou){
                if($gazou == 0){
                    ?><div id="ura"><img src="../album/card2.jpg" alt="裏面" width="250px" height="470" align="left"></div><?php
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
                                <td><p><h1>【愚者】</h1><br><h2>自分らしさを発揮しつつ、自由奔放な人生を歩んでください。「何をやってもうまくいく」という根拠のない自信が大事です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "魔術師":?>
                            <table><tr>
                                <td><img src="../album/1.jpg" alt="魔術師" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【魔術師】</h1><br><h2>あなたはいろいろなことを試す開拓心と野心のある人です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女教皇":?>
                            <table><tr>
                                <td><img src="../album/2.jpg" alt="女教皇" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女教皇】</h1><br><h2>あなたはまだみぬ才能に満ち溢れています。それを発見するには困難なことがあるかもしれないのですが、自分の直感を信じてみてください</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女帝":?>
                            <table><tr>
                                <td><img src="../album/3.jpg" alt="女帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女帝】</h1><br><h2>あなたは、いろいろな感性のもち主です。その美しい感性を活かしてください。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "皇帝":?>
                            <table><tr>
                                <td><img src="../album/4.jpg" alt="皇帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【皇帝】</h1><br><h2>あなたは、計画性があり目標を達成することができる人でしょう。でもその意志の固さに難しいことを考えすぎて空回りすることがあるかもしれません</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "法王":?>
                            <table><tr>
                                <td><img src="../album/5.jpg" alt="法王" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【法王】</h1><br><h2>あなたは、本当に困っているときにそっと力を貸してくれるような目上の存在です。穏やかに相手を受け止めることが大事です</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "恋人":?>
                            <table><tr>
                                <td><img src="../album/6.jpg" alt="恋人" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【恋人】</h1><br><h2>あなたは、自分自身のバランスがいい人です。新たに何か始めてみるのもいいかもしません。そうすると一つの吐出したものが生まれるかもしれないですね。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "戦車":?>
                            <table><tr>
                                <td><img src="../album/7.jpg" alt="戦車" width="250px"align="center"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【戦車】</h1><br><h2>あなたは、勝ちへの執着が強いあまり周りのことが見えなくなってしまっています。それを改善してみましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "力":?>
                            <table><tr>
                                <td><img src="../album/8.jpg" alt="力" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【力】</h1><br><h2>他人にまかせて自分は傍観していればうまくいくなんて甘ったるい考えでは成功できませんが、あなたは潜在的に力強くエネルギッシュな人間です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "隠者":?>
                            <table><tr>
                                <td><img src="../album/9.jpg" alt="隠者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【隠者】</h1><br><h2>あなたは、気持ちがあっても表現できない時があります。表現してはいけない相手かもしれません。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "運命の輪":?>
                            <table><tr>
                                <td><img src="../album/10.jpg" alt="運命の輪" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【運命の輪】</h1><br><h2>あなたにとって望ましい方向へ変化するのですが、チャンスは一度きりかも。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "正義":?>
                            <table><tr>
                                <td><img src="../album/11.jpg" alt="正義" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【正義】</h1><br><h2>あなたは、物事を深く考えすぎて無駄に感情を消耗してしまうことがあります。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "吊るされた男":?>
                            <table><tr>
                                <td><img src="../album/12.jpg" alt="吊るされた男" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【吊るされた男】</h1><br><h2>あなたの人生には挑戦と苦労はセットです。でもその苦労に耐えればいいことが待ってるはずです。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "死神":?>
                            <table><tr>
                                <td><img src="../album/13.jpg" alt="死神" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【死神】</h1><br><h2>お疲れ様です。あなたの人生「大凶」です。
			改善策は、こちらのボタン→</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "節制":?>
                            <table><tr>
                                <td><img src="../album/14.jpg" alt="節制" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【節制】</h1><br><h2>あなたは、あれこれ考えなくても、放っておくだけで上手く物事が流れていきます</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "悪魔":?>
                            <table><tr>
                                <td><img src="../album/15.jpg" alt="悪魔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【悪魔】</h1><br><h2>お疲れ様です。あなたの人生はほぼ終了です。
			終わりたくなかったらこちらのボタン→<a href="../sagi/oto.php">https//www.ace.ac.jp/</a></h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "塔":?>
                            <table><tr>
                                <td><img src="../album/16.jpg" alt="塔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【塔】</h1><br><h2>お疲れ様です。あなたの人生は落ちてく一方です。
                                    落ちたくなかったらこちらのボタン→<a href="../sagi/oto.php">https//www.ace.ac.jp/</a></h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "星":?>
                            <table><tr>
                                <td><img src="../album/17.jpg" alt="星" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【星】</h1><br><h2>あなたは、夢見がちで、非現実的な美しさや夢や優しさに触れて、心なごんだり深い安らぎを感じています。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "月":?>
                            <table><tr>
                                <td><img src="../album/18.jpg" alt="月" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【月】</h1><br><h2>あなたの人生は結果や先行きが不透明です。
			移したいならこちらのボタン→<a href="../sagi/oto.php">https//www.ace.ac.jp/</a></h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "太陽":?>
                            <table><tr>
                                <td><img src="../album/19.jpg" alt="太陽" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【太陽】</h1><br><h2>エネルギッシュなやりとりを繰り返すことで、何をやってもうまくいって、屈託なく明るい状況が訪れるでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "審判":?>
                            <table><tr>
                                <td><img src="../album/20.jpg" alt="審判" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【審判】</h1><br><h2>全体的に運気アップ</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "世界":?>
                            <table><tr>
                                <td><img src="../album/21.jpg" alt="世界" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【世界】</h1><br><h2>完成された世界がもたらす幸福感に満たされる時です。到達しうる最高レベルの幸福感ですから完全無欠です</h2></p></td>
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
            <div class="box_right"style="background: url(../album/bye.gif);">
            </div>
        </div>
            <div class="footer">
            </div>
</div>
    </body>
</html>