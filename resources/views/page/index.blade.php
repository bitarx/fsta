@extends('layouts.master')

@section('content')
<div id="mainImg">
    <div class="flexslider">
        <ul class="slides" style="text-align:center;">
            <li><img src="/images/banners/mainImg1.jpg" height="328" alt=""></li>
        </ul>
    </div>
</div>

<div id="wrapper">
    <div id="content">
        <section>
            <article id="desc" class="content">
                <header>

                    <h2 class="title"><span>ふりスタとは？</span></h2>
                </header>
                <div class="post">
                    <p>「 Free　Style　Study　System 」（ フリー・スタイル・スタディ・システム ）の略称で、「 自由な形式の学習形態 」を目的としています。</p>
                    <h3>☆『 Free　Style 』（学習指導形態）</h3>
                    <p><img src="images/banners/desc1.png" alt="" width="201" class="alignleft">
                        <span class="strong">A. 「 家庭教師・個別指導プラン 」〔 1対1・担任制完全個別スタイル 〕</span><br>
                        ・その日の学習内容において、生徒さんから特にリクエストがない場合、教室長の準備した教材で学習を進めます。<br>
                        　模試対策、定期試験対策、検定試験対策など、教室長が指導方針を決め、学習担当講師と生徒さんが相談してその日の学習内容を決めます。<br>
                        　一方的にその日の指導内容を決めることはありません。<br>
                        ・国語や英語の「 長文の読み合わせ 」などにも、じっくり時間を使えます。<br><br>

                        <span class="strong">B. 「スタンダード・個別指導プラン」〔中学生対象：少人数・個別指導スタイル（ 1クラス3名程度）〕</span><br>
                        ・生徒さん一人ひとりの「 短期目標 」に従い、教室長が指示する内容を学習します。<br>
                        　その為、生徒さん一人ひとりの学習内容も変わります。<br>
                        　「 定期試験対策 」や「 模擬試験対策 」、「 振り返り学習 」などを行います。<br><br>

                        <span class="strong">C. 「 特訓講習スタンダードプラン 」〔 中学生対象：少人数クラス指導 〕【 季節講習期間中や定期試験前の限定開講 】</span><br>
                        ・問題演習に特化したコースになります。<br>
                        　教室長の用意した問題の演習中心の学習になります。<br><br>

                        <span class="strong">D．「 ゲスト模擬試験受験生プラン 」〔 模擬試験の受験のみを希望する場合 〕</span><br>
                        ・『 ふりスタ 』では『 新みやぎ模試 』が受験可能です（ 受験後の成績表は郵送になります ）。
                           <br></p>

                    <h3>☆『 Free　Study 』 教室の使用は自由です〔 A、B、Cプラン対象 〕</h3>
                    <p><img src="images/banners/desc2.png" alt="" width="201" class="alignleft">
                       塾生（ 模試生を除く ）は、自習室として教室を自由にお使いいただけます。<br>「 時と精神の自習ブース 」で静かに勉強することができます。<br>自習時間の質と量が合格のカギを握ります！<br><br>
                        自習室の使用例<br>
                        ① <span class="notice">土・日・祝日や季節講習期間中など</span><br>
                        ９：00～12：00　スタンダード個別指導クラス<br>
                        12：00～19：00　自習室として教室を開放<br><br>
                        ② <span class="notice">平日　月曜 ～ 金曜日</span><br>
                        16：30～19：00　自習室として教室を開放<br><br></p>

                    <h3>☆ 一人ひとりのオーダーメイドプログラム〔 A、Bプラン対象 〕</h3>
                    <p><img src="images/banners/classroom.png" alt="" width="231" class="alignright">子供たち一人ひとりの性格や学力は異なるものです。<br>一人ひとりのオーダーメイド学習プログラムなので、「 わかりきった問題の繰り返し 」や「 難しすぎて一人では解けない 」と言った、無駄な時間がありません。<br>時間を有効に使うことができます。</p>

                    <h3>☆ 『 長期目標の設定 』＆『 短期目標の修正 』</h3>
                    <p><img src="images/banners/mendan_boy.png" alt="" width="231" class="alignleft">
                        入塾面談時に「 年間長期目標 」をお伺いします。<br>定期試験や模擬試験の度に「 短期目標 」の見直しを行います。<br>「 短期目標 」とは「 次の試験までの学習内容の指導計画 」になります。<br><br><br><br></p>

                    <h3>☆ 『 Free　Star 』を一緒に目指しましょう</h3>
                    <p><img src="images/banners/success.png" alt="" width="231" class="alignleft">他の人よりも頑張って、他の人よりも問題を1問でも多く解いて、「 立派な自由な星 」のように輝きましょう。<br>受験だけではなく、世の中は競争だらけです。なんでも頑張って、自分の限界を広げましょう。<br><br><br></p>


                    <h3>☆ 『 Free　Drinks 』（ 水分補給サービス ）</h3>
                    <p><img src="images/banners/jihan.png" alt="" width="190" class="alignright">模擬試験の実施日に限り、『 ふりスタCafé 』が無料となります。<br>模擬試験の受験者は、ご自由にジュース類をお飲みください。<br><br>
                    <span class="notice">新みやぎ模試・実施予定日</span>
                    <table class="statsDay">
                        <tr><td>７月15日(日)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>８月11日(土・祝)</td><td><span class="strong">【 小５〜中３生対象 】</span></td></tr>
                        <tr><td>９月９日(日)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>10月８日(月・祝)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>11月３日(土・祝)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>12月２日(日)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>１月６日(日)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>２月11日(月・祝)</td><td><span class="strong">【 中３生対象 】</span></td></tr>
                        <tr><td>３月24日(日)</td><td><span class="strong">【 小５〜中２生対象 】</span></td></tr>
                    </table>
                            午前の部　 9時～13時20分<br>
                            午後の部　14時～18時20分<br>料金は、3,600円（消費税込み）<br>（申し込み締め切りは、いずれも実施日の一週間前までです）<br>

                    </p>
                </div>
            </article>
        </section>
        <section>
            <article id="fee" class="content">
                <header>
                    <h2 class="title"><span>指導料金「 １対1の完全個別・家庭教師プラン 」</span></h2>
                </header>
                <div class="post toppage">
                    <table class="statsDay">
                        <tbody>
                            <img src="images/banners/1on1.png" alt="" width="231" class="alignright">
                            <tr>
                                <th>小学生</th>
                                <td>１時間</td>
                                <td>　¥2,400　</td>
                            </tr>
                            <tr>
                                <th>中学1年生　　</th>
                                <td>２時間</td>
                                <td>　¥6,000　</td>
                            </tr>
                            <tr>
                                <th>中学2年生　　</th>
                                <td>２時間</td>
                                <td>　¥7,000　</td>
                            </tr>
                            <tr>
                                <th>中学3年生　　</th>
                                <td>２時間</td>
                                <td>　¥7,500　</td>
                            </tr>
                            <tr>
                                <th>高校1年生　　</th>
                                <td>２時間</td>
                                <td>　¥8,000　</td>
                            </tr>
                            <tr>
                                <th>高校2年生　　</th>
                                <td>２時間</td>
                                <td>　¥9,000　</td>
                            </tr>
                            <tr>
                                <th>高校3年生　　</th>
                                <td>２時間</td>
                                <td>　¥10,000　</td>
                            </tr>
                        </tbody>
                    </table>
                    ※ 仙台高専４年生・浪人生は高校３年生料金となります。<br>
                </div>
            </article>

            <article class="content">
                <header>
                    <h2 class="title"><span style="color:#4169e1">中学生対象：　季節講習案内　</span></h2>
                </header>
                <div class="post toppage">
                    <table>
                        <tbody>
                    <p><span class="strongMessage">☆スタンダード・個別指導プラン</span></p>
                            <tr>
                                <th>講習日</th>
                                <td>7月21日（土）　～　8月26（日）</td>
                            </tr>
                            <tr>
                                <th>時間１</th>
                                <td>朝 9：00　～　昼 12：00</td>
                            </tr>
                            <tr>
                                <th>時間２</th>
                                <td>朝 19：00　～　昼 21：00(曜日限定)<br>※詳しくは、教室にお尋ねください。</td>
                            </tr>
                            <tr>
                                <th>学習時間</th>
                                <td>1時間　～　2時間</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <p><span class="strongMessage">☆	個別指導　10時間コース　￥16,000（お試しコースです）</span></p>
                    <p><span class="strongMessage">☆	個別指導　15時間コース　￥23,000（個別指導のライトパックです）</span></p>
                    <p><span class="strongMessage">☆	個別指導　20時間コース　￥30,000（夏休み期間中に、じっくりと学習を進めます）</span></p>
                    <p><span class="notice">※	講習期間内に、定まった時間の学習指導を受けて頂くことになります。そのため午後は、フリータイムになります。自主的に自習するのも、1対1の指導を追加するのも自由です。</span></p>
                    <p><span class="notice">※	講習期間中に限らず当塾では、2時間を超える長時間の授業、3教科以上の（極端な）複数教科の学習、集団形式の授業は行いません。</span></p>
                    <p><span class="notice">※	時間が無くなると、無理をしなければいけません。時間を上手に使って、「 充実した夏休み 」にしましょう。</span></p>
                </div>
            </article>


            <article id="" class="content">
                <header>
                    <h2 class="title"><span>指導料金「 スタンダード・個別指導プラン 」</span></h2>
                </header>
                <div class="post toppage">
                    <img src="images/banners/school_room.png" alt="" width="241" class="alignleft">
                    中学1年生　～　中学3年生
                    <table>
                        <tbody>
                            <tr>
                                <th>90分 １回</th>
                                <td>¥2,700 （月４回未満の場合）</td>
                            </tr>
                            <tr>
                                <th>90分 月４回</th>
                                <td>¥10,000</td>
                            </tr>
                            <tr>
                                <th>90分 月８回</th>
                                <td>¥19,000</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="emphasis">月１２回以上ご希望の場合　塾規定によりさらに月謝が割引となります<br></div><br>
                    <table>

                    小学生対象『 キッズ・スタンダード60 』(1回の学習時間を60分にしたいとき)
                    <table>
                        <tbody>
                            <tr>
                                <th>60分 月４回</th>
                                <td>¥4,400</td>
                            </tr>
                            <tr>
                                <th>60分 月６回</th>
                                <td>¥6,300</td>
                            </tr>
                            <tr>
                                <th>60分 月８回</th>
                                <td>¥8,000</td>
                            </tr>
                            <tr>
                                <th>月10回以上ご希望の場合</th>
                                <td>¥10,000 固定</td>
                            </tr>
                        </tbody>
                    </table>
※総学習時間が10時間を超える場合、月謝は¥10,000(税込み)固定となります。<br><br>
『 キッズ・スタンダード90 』（1回の学習時間を60分を超えて、2時間以内にしたいとき）<br>
                    <table>
                        <tbody>
                            <tr>
                                <th>90分 月４回</th>
                                <td>¥6,600</td>
                            </tr>
                            <tr>
                                <th>90分 月６回</th>
                                <td>¥9,450</td>
                            </tr>
                            <tr>
                                <th>90分 月８回</th>
                                <td>¥12,000</td>
                            </tr>
                            <tr>
                                <th>月10回以上ご希望の場合</th>
                                <td>¥15,000 (固定)</td>
                            </tr>
                        </tbody>
                    </table>
※総学習時間が15時間を超える場合、月謝は¥15,000(税込み)固定となります。<br>
※	指導時間帯　月 ～ 金 〔 平日 〕　15：00～19：00　（ 原則として ）<br>
キッズスタンダードは学習可能な時間に教室に来ていただき、学習をするスタイルになります。指導時間に過不足が出た場合、翌月に繰り越します。その場合、月謝は30分単位の清算になります。少人数指導が基本ですが、時間帯によって、1対1の指導になることもあります。
                    <br>
                    <table>
                        <tbody>
                            <tr>
                                <th style="width:20%">月 ～ 金<br>〔 平日 〕</th>
                                <td style="width:80%">〔 １限目 〕17：00～　〔 ２限目 〕18：30～　<br>〔 ３限目 〕20：00～</td>
                            </tr>
                            <tr>
                                <th>土曜日・日曜日・祝日</th>
                                <td>〔 １限目 〕9：00～　〔 ２限目 〕10：30～　<br>〔 ３限目 〕12：00～</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                    （1） 入会金　随時無料。<br>
                    （2） 月謝や模擬試験の受験料、教材費などは、消費税が含まれた金額になります。<br>
                    （3） 年間教材費 ( 中学生 原則5教科12カ月分、3,000円)（ 国語・数学・英語・理科・社会 ）<br>
                     ( 小学生 選択3教科12カ月分、2,000円)( 国語・算数・英語など )<br>
                    ※ 教材を持参する場合（ 学校のワーク類や他塾で使っていた教材を使用したい場合など ）、年間教材費は不要です。<br>
                    （4） ご家庭での指導を希望する場合、別途派遣費用が必要になります。<br>
                     （5） 併塾・退塾・休塾は自由です。<br>
                    （6） 学習指導の時間帯と料金は飽くまでも目安となります。時間を延長して授業を受けた場合や、時間を短縮して授業を受けた場合は30分単位の清算になります。<br>
                    （7） 季節や時間帯によって（講師のスケジュールの都合上）、指導日時が塾優先で相談させていただく場合があります。<br>
                    </p>
                </div>
            </article>
        </section>
        <section>
            <article id="format" class="content">
                <header>
                    <h2 class="title"><span>☆ 『 学習指導内容 』のご案内<br>（ 学習を進める上での「 年間長期目標 」になります。 ）</span></h2>
                </header>
                <div class="post toppage">
                    <h3>大学受験生 ＆ 高専生</h3>
                    <p>・〔 大学進学総合コース 〕 ①志望校の受験勉強、②定期試験対策、③模擬試験対策を行います。<br>
・〔 高専生 〕定期試験対策(重積分、ラプラス変換、フーリエ解析まで指導します)
</p>
                    <h3>中学生 ＆ 高校受験生</h3>
                    <p>
                        ・〔 TOP高(ナンバースクール＆国立高専) 狙い撃ちコース 〕<br>
　学校の授業内をある程度無視して、学習を進めるだけ進みます。<br>（ご希望の場合、高校生範囲の数学や英語も指導します。）<br><br>

・〔 総合学力・充実コース 〕<br>
　「 定期試験の対策 」と「 模擬試験の対策 」が学習指導の中心になります。（白石高校合格が目的になります。）<br><br>

・〔 基礎学力・定着コース 〕<br>
　「 既習範囲の確認 及び 基礎学力の定着 」と「 定期試験の対策 」が学習指導の中心になります。<br> (柴田高校・大河原商業高校・白石工業高校の合格が目的になります。)<br><br>

・〔 限界突破・集中特訓指導コース 〕<br>
学習に対する意識改革及び、学習習慣の定着が目的となります。5教科で100点前後の生徒さんでも大丈夫です。毎年一人か二人、格段に成績が向上する生徒さんがいます。学力の飛躍的な向上には、時間がかかることをご理解ください。<br><br>
・〔 数学マスターコース 〕<br>
5教科の中でも、特に数学の学習にこだわったコースです。数学は、三角関数や微分積分を学んで、その本当の魅力が分かります。コースの受付は、毎年1人だけとさせて頂きます。
                    </p>
                    <h3>小学生</h3>
                    <p>
                        ・〔 予習 + 復習 〕 学習習慣の定着<br>
　学校の授業内容の予習と復習が中心になります。<br>　算数(数学)や英語の先取り学習や、各種検定試験対策も行います。<br>　いっしょに『 We can 』の学習も行えます。
                    </p>
<br>
<p>『 ふりスタ 』は「 新しくて、自由な学習スタイル 」の確立を目指しております。</p>
                </div>
            </article>
        </section>
        <section>
            <article id="case" class="content">
                <header>
                    <h2 class="title"><span>合格実績</span></h2>
                </header>
                <div class="post toppage">
                    <p>
『 <b>教室長プロフィール</b> 』<br><br>
<span class="strongMessage">宮城教育大学卒業後、集団指導学習塾に勤務。<br>
スキルアップの為、個別指導学習塾（M）の教室長に就任。<br>
スキルアップの為、大手家庭教師塾（K）に約10年間勤務。<br>そのほとんどの期間を宮城県No.1 家庭教師として実績を残しました。<br>満を持しての独立開業です。<br>
あらゆる塾業界を経験した教室長が選択した学習指導スタイルは『 超・個別指導 』です。
</span></p><br>

<img src="/images/banners/daigaku.png" alt="" width="230" class="alignleft" />

<p>以下は過去の合格実績（家庭教師プラン）の一部です。1対1での指導期間が長期に渡っているのがお分かりいただけると思います。信頼と実績の証です。</p>
<p>
【 大学合格実績 】<br>
☆ <span class="strong">東北大学法学部</span>（H27） ← 仙台三高合格（H24） ← 福島県某中出身[HYくん]<br>
☆ <span class="strong">福島大学・人文社会科学群・人間発達文化学類（推薦）</span>(H27)　← 白石高校・普通科合格(H24) ← 白石東中出身[SMさん(お姉さま)]<br>
☆<span class="strong">福島大学・人文社会科学群・経済経営学類（前期）</span>(H29)　← （H26）白石高校・普通科（前期）(H26) ← 白石東中出身[SMさん(妹さん)]<br>
☆ <span class="strong">山形大学医学部看護学科</span>（H25） ← 白石高出身[SMさん]<br>
☆ <span class="strong">宮城教育大学中等教育教員養成課程後期合格</span>（H24） ← 白石高出身[SRさん]<br>

☆	<span class="strong">東北福祉大学・総合福祉学部・社会福祉学科（ＡＯ２期）</span>（H29） ← 柴田高校・体育学科（前期）（Ｈ26） ← 大河原中出身[KIくん]<br>
☆	<span class="strong">東北福祉大学健康科学部リハビリテーション学科作業療法学専攻 (校内推薦)</span>（H28） ← （Ｈ25）泉松陵高校・普通科（H25） ← 金ケ瀬中（H22） ← 金ケ瀬小出身[SIくん]<br>
☆	<span class="strong">東北福祉大学・総合マネジメント学部（H25）</span> ← 角田高（H22） ← 川崎中出身[TYくん]<br>

☆	<span class="strong">東北学院大学（経済学部）</span> ← 白石高校出身[KTくん]<br>
☆	<span class="strong">東北学院大学（共生経済学部）</span> ← 白石高校出身[KTくん]<br>

☆	<span class="strong">新潟薬科大学・薬学部【白石高】、盛岡大学（文学部）【白石高】、仙台大学（校内推薦）【学校法人松韻学園 福島高等学校】、工学院大学【角田高校】</span>、他<br><br>

【 仙台高専合格実績 】<br>
☆	<span class="strong">仙台高専・電気科専攻科（推薦合格）</span>（H28） ← 仙台高専・電気システム学科（H24） ← 角田中出身[ORくん]<br>
☆	<span class="strong">仙台高専・建築デザイン学科（推薦）</span>(H28)　← 遠刈田中出身[SAくん]<br>
☆	<span class="strong">仙台高専・マテリアル環境（推薦）</span>（H26）← 金津中出身[SYくん]<br><br>

【 高校合格実績 】<br>
☆	<span class="highschool">白石高校・普通科</span>（H29） ← 福岡中学校(H22) ← 福岡小出身[ISくん]<br>
☆	<span class="highschool">白石高校・看護学科</span>（H26） ← 白石東中出身[SSさん]<br>

☆	<span class="highschool">白石工業高校・設備工業科【金津中】、白石工業 （機械科）【遠刈田中】、白石工業（電気科）【大張中】</span><br>

☆	<span class="highschool">柴田高校・普通科（H28）【福岡中】、柴田高校・普通科（前期選抜）【白石東中】、柴田高校・普通科【船岡中】</span><br>

☆	<span class="highschool">大河原商業・流通マネジメント科（前期選抜）【福岡中】、名取北高【白石中】、宮城第一高等学校【角田中】、村田高校（推薦）【宮中】、村田高校【宮中】、名取高校【宮中】</span>、他<br>
</p>
<!--
<p>☆   <span class="notice">I・K くん</span>（Ｈ29）<span class="strong">東北福祉大学・総合福祉学部・社会福祉学科</span>（ＡＯ２期）<br>
（Ｈ26）<span class="highschool">柴田高校・体育学科</span>（前期）【 大河原中 】</p>

<p>☆   <span class="notice">H・M さん</span>（Ｈ29）<span class="highschool">大河原商業・流通マネジメント科</span>（前期選抜試験）【 福岡中 】</p>

<p>☆   <span class="notice">H・O さん</span>（Ｈ29）<span class="highschool">柴田高校・普通科</span>（前期選抜試験）【白石東中】</p>

<p>☆   <span class="notice">M・S さん</span>（Ｈ29）<span class="highschool">福島大学・人文社会科学群・経済経営学類（前期）　</span>（H26）白石高校・普通科（前期）【白石東中学校】</p>

<p>☆   <span class="notice">S・I くん</span>（Ｈ29）<span class="highschool">白石高校・普通科（後期）【福岡中学校】　</span></p>

<p>☆   <span class="notice">K・M くん</span>（Ｈ29）<span class="highschool">白石工業高校・設備工業科（後期）【金津中学校】　</span></p>

<p>☆   <span class="notice">S・K くん</span>（Ｈ29）<span class="highschool">柴田高校・普通科（後期）【船岡中学校】　</span></p>


<p>☆   <span class="notice">R・O くん</span>（Ｈ28）<span class="strong">仙台高専・電気科専攻科</span>（推薦合格）≪4年生まで指導≫<br>
　　　　　　（Ｈ24）<span class="strong">仙台高専・電気システム学科</span>（一般）【 角田中 】</p>

<p>☆   <span class="notice">Y・H くん</span>（H27）<span class="strong">東北大学法学部</span>（センター試験及び２次試験での数学指導）<br>
　　　　　　（H24）<span class="highschool">仙台三高合格</span>（後期選抜）</p>

<p>☆   <span class="notice">I・S くん</span>（Ｈ28）<span class="strong">東北福祉大学健康科学部リハビリテーション学科作業療法学専攻</span>
(校内推薦)<br>
　　　　　　（Ｈ25）<span class="highschool">泉松陵高校・普通科</span>（後期選抜）【 金ケ瀬中 】</p>


<p>☆   <span class="notice">M・S さん</span>（Ｈ27）<span class="strong">福島大学・人文社会科学群・人間発達文化学類</span>（推薦）<br>
　　　　　　（Ｈ24）<span class="highschool">白石高校・普通科合格</span>(後期)【 白石東中学校出身 】</p>

<br>
<p>☆   【 H28 】　<span class="strong">新潟薬科大学・薬学部</span>【白石高】、<span class="strong">盛岡大学（文学部）</span>【白石高】、<span class="strong">仙台高専・建築デザイン学科</span>（推薦）【遠刈田中】、<span class="highschool">柴田高校・普通科</span>（後期）【福岡中】</p>

<p>☆   【 H27 】　<span class="highschool">名取北高</span>（後期）、 <span class="highschool">宮城第一高等学校</span>（後期）【角田中】</p>
<p>☆   【 H26 】　<span class="highschool">白石高校・看護学科</span>（後期）【白石東中】、<span class="strong">仙台高専・マテリアル環境</span>（推薦）【金津中】</p>

<p>☆   【 H25 】　<span class="strong">山形大学医学部看護学科</span>（センター試験での数学指導）【白石高】、<span class="highschool">尚絅学院中学</span>【船岡中】、<span class="highschool">村田高校</span>【宮中】、<span class="highschool">角田高校</span>【川崎中】、<span class="highschool">白石工業
（機械科）</span>【遠刈田中】、<span class="highschool">白石工業（電気科）</span>【大張中】、（Ｈ25）<span class="strong">東北福祉大学・総合マネジメント学部</span>（一般）【角田高】</p>

<p>【 その他 】　<span class="strong">東北文化学園大学、工学院大学</span>、<span class="highschool">白石工業高等学校</span>（２名、電気科、機械科）、<span class="strong">宮城教育大学中等教育教員養成課程後期合格</span>（数学指導）、<span class="strong">仙台大学</span>（校内推薦）、<span class="highschool">角田高校 、白石高校、村田高校</span>（推薦）、<span class="highschool">村田高校</span>（一般）、<span class="highschool">名取高校</span></p>
<br>
-->
<br>
                </div>
            </article>
        </section>
        <section>
            <article id="access" class="content">
                <header>
                    <h2 class="title"><span>アクセス</span></h2>
                </header>
                <div class="post toppage">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3143.855684846724!2d140.6231687502867!3d38.00382650662266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a421d4b5f1241%3A0xdcf52d636bedeb85!2z44CSOTg5LTAyNDMg5a6u5Z-O55yM55m955-z5biC5rKi55uu77yY4oiS77yX!5e0!3m2!1sja!2sjp!4v1505975100454" width="98%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </p>
                </div>
            </article>
        </section>

    </div><!-- / content -->

    @include('elements.sidebar')

</div>
<!-- / wrapper -->

@endsection
