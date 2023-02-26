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
            <div class="box_left" style="background: url(../album/carot.gif);background-position: bottom;background-repeat: no-repeat;background-color: #ffcc99;">
            </div>
            <div class="box_center">
                <h1>健康運</h1>
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
                    ?><div id="ura"><img src="../album/card3.jpg" alt="裏面" width="250px" height="470"></div><?php
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
                                <td><p><h1>【愚者】</h1><br><h2>あなたの健康運は、とくにもんだいない。食欲旺盛でいい感じ。食べ過ぎ注意！</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "魔術師":?>
                            <table><tr>
                                <td><img src="../album/1.jpg" alt="魔術師" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【魔術師】</h1><br><h2>あなたの健康運は、上昇の兆しを見せています。特に気になる症状があるならば、治療をスタートさせるのには良い時期。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女教皇":?>
                            <table><tr>
                                <td><img src="../album/2.jpg" alt="女教皇" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女教皇】</h1><br><h2>あなたの健康運は、良好です。特に、精神的な安らぎがフォーカスされる時期といえます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "女帝":?>
                            <table><tr>
                                <td><img src="../album/3.jpg" alt="女帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【女帝】</h1><br><h2>あなたの健康運は、とても好調です。　肉体的にエネルギーがみなぎっており、疲れ知らずとなりそうです。精神的にもやる気満々、多忙なスケジュールもパワフルに難なくこなし、体力に自信がもてるはずです。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "皇帝":?>
                            <table><tr>
                                <td><img src="../album/4.jpg" alt="皇帝" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【皇帝】</h1><br><h2>あなたの健康運は、良好です。栄養バランスの取れた食事をとり、自己管理を徹底するのもいい</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "法王":?>
                            <table><tr>
                                <td><img src="../album/5.jpg" alt="法王" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【法王】</h1><br><h2>あなたの健康運は、ウイルスを持っているかも。すぐ、病院に行きましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "恋人":?>
                            <table><tr>
                                <td><img src="../album/6.jpg" alt="恋人" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【恋人】</h1><br><h2>あなたの健康運は、最悪。安静にし、今日一日寝てましょう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "戦車":?>
                            <table><tr>
                                <td><img src="../album/7.jpg" alt="戦車" width="250px"align="center"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【戦車】</h1><br><h2>あなたの健康運は、好調です。　体力がみなぎり、活躍できる時期。回復が早いため、活発的に動こう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "力":?>
                            <table><tr>
                                <td><img src="../album/8.jpg" alt="力" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【力】</h1><br><h2>あなたの健康運は、完璧な時。非常に好調で、肉体的な健康によって、ストレスが解消</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "隠者":?>
                            <table><tr>
                                <td><img src="../album/9.jpg" alt="隠者" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【隠者】</h1><br><h2>あなたの健康運は、考える時期。気になる症状があるならば、症状についての良いアドバイスが得られるかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "運命の輪":?>
                            <table><tr>
                                <td><img src="../album/10.jpg" alt="運命の輪" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【運命の輪】</h1><br><h2>あなたの健康運は、転換期を迎えています。　そのため、現時点で健康面での問題がなくても、足をすくわれることがあるので注意が必要です。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "正義":?>
                            <table><tr>
                                <td><img src="../album/11.jpg" alt="正義" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【正義】</h1><br><h2>あなたの健康運は、良好です。自分の体調をきちんと把握することでより健康になります。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "吊るされた男":?>
                            <table><tr>
                                <td><img src="../album/12.jpg" alt="吊るされた男" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【吊るされた男】</h1><br><h2>あなたの健康運は、まぁまぁです。体は健康ですが、心にもやもやがあるかも。メンタルトレーニングをおすすめします。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "死神":?>
                            <table><tr>
                                <td><img src="../album/13.jpg" alt="死神" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【死神】</h1><br><h2>あなたの健康運は、絶望。幸い今は健康ですが、近いうちに骨折や事故にあうかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "節制":?>
                            <table><tr>
                                <td><img src="../album/14.jpg" alt="節制" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【節制】</h1><br><h2>あなたの健康運は、好調です。痩せたいあなたは今がチャンス！節度ある生活をしダイエットしよう</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "悪魔":?>
                            <table><tr>
                                <td><img src="../album/15.jpg" alt="悪魔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【悪魔】</h1><br><h2>あなたの健康運は、最悪。病気にかかりやすくなります。さらに、なかなか治らない病気にもなってしまうかも</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "塔":?>
                            <table><tr>
                                <td><img src="../album/16.jpg" alt="塔" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【塔】</h1><br><h2>あなたの健康運は健康に対して注意するべき時期です。　体力に自信を持てる時ではあるのですが、予期しなかった突然の変化に見舞われることがありそう。見込み違いの状況に、パニック状態になることも考えられます。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "星":?>
                            <table><tr>
                                <td><img src="../album/17.jpg" alt="星" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【星】</h1><br><h2>あなたの健康運は、最高です。病気になっても苦しくなく自然に治ります。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "月":?>
                            <table><tr>
                                <td><img src="../album/18.jpg" alt="月" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【月】</h1><br><h2>あなたの健康運は、心配です。重い症状の病気にかかります。、病気を早期発見し、治療をスタートしましょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "太陽":?>
                            <table><tr>
                                <td><img src="../album/19.jpg" alt="太陽" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【太陽】</h1><br><h2>あなたの健康運は、好調です。　心身ともにエネルギッシュで、元気な時。体力がみなぎり、活躍できる時期ですので、どんどん活動的になるとよいでしょう。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "審判":?>
                            <table><tr>
                                <td><img src="../album/20.jpg" alt="審判" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【審判】</h1><br><h2>あなたの健康運は、良好です。ただ、判断を間違えると大変な事になります。</h2></p></td>
                                </tr>
                            </table><?php
                            break;
                        case "世界":?>
                            <table><tr>
                                <td><img src="../album/21.jpg" alt="世界" width="250px"></td>
                                <td>&nbsp;</td>
                                <td><p><h1>【世界】</h1><br><h2>あなたの健康運は、完璧な時。非常に好調で、肉体的な健康によって、頭脳も冴えているはず。さらに、精神的にも明るさがあり、気持ちを大きく持てる時です。</h2></p></td>
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
            <div class="box_right" style="background: url(../album/letas.gif);background-position: center;background-repeat: no-repeat;background-color: #ffcc99;">
            </div>
        </div>
            <div class="footer">
            </div>
</div>
    </body>
</html>