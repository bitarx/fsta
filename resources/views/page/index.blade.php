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
                        ・その日の学習内容において、生徒さんから特にリクエストがない場合、教室長の準備した教材で学習を進めます。模試対策、定期試験対策、検定試験対策など、教室長が指導方針を決め、学習担当講師と生徒さんが相談してその日の学習内容を決めます。一方的にその日の指導内容を決めることはありません。<br>
                        ・国語や英語の「 長文の読み合わせ 」などにも、じっくり時間を使えます。<br><br>

                        <span class="strong">B. 「スタンダード・個別指導プラン」〔中学生対象：少人数・個別指導スタイル（ 1クラス3名程度）〕</span><br>
                        ・生徒さん一人ひとりの「 短期目標 」に従い、教室長が指示する内容を学習します。その為、生徒さん一人ひとりの学習内容も変わります。「 定期試験対策 」や「 模擬試験対策 」、「 振り返り学習 」などを行います。<br><br>

                        <span class="strong">C. 「 特訓講習スタンダードプラン 」〔 中学生対象：少人数クラス指導 〕【 季節講習期間中や定期試験前の限定開講 】</span><br>
                        ・問題演習に特化したコースになります。教室長の用意した問題の演習中心の学習になります。<br><br>

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
                    <p><img src="images/banners/classroom.png" alt="" width="231" class="alignright">子供たち一人ひとりの性格や学力は異なるものです。<br>一人ひとりのオーダーメイド学習プログラムなので、「 わかりきった問題の繰り返し 」や「 難しすぎて一人では解けない 」と言った、無駄な時間がありません。時間を有効に使うことができます。</p>

                    <h3>☆ 『 長期目標の設定 』＆『 短期目標の修正 』</h3>
                    <p><img src="images/banners/mendan_boy.png" alt="" width="231" class="alignleft">
                        入塾面談時に「 年間長期目標 」をお伺いします。<br>定期試験や模擬試験の度に「 短期目標 」の見直しを行います。「 短期目標 」とは「 次の試験までの学習内容の指導計画 」になります。<br><br><br><br><br><br></p>

                    <h3>☆ 『 Free　Star 』を一緒に目指しましょう</h3>
                    <p><img src="images/banners/success.png" alt="" width="231" class="alignleft">他の人よりも頑張って、他の人よりも問題を1問でも多く解いて、「 立派な自由な星 」のように輝きましょう。<br><br><br><br><br><br></p>


                    <h3>☆ 『 Free　Drinks 』（ 水分補給サービス ）</h3>
                    <p><img src="images/banners/jihan.png" alt="" width="190" class="alignright">模擬試験の実施日に限り、『 ふりスタCafé 』が無料となります。模擬試験の受験者は、ご自由にジュース類をお飲みください。<br><br><br>
                    <span class="notice">新みやぎ模試・実施予定日</span>
                    <table class="statsDay">
                        <tr><td>３月25日(日)</td><td><span class="strong">【 新小５ ～ 新中３生対象 】</span></td></tr>
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
                    （5） 退塾・併塾・休塾は自由です。お引止めはしませんが、塾に復帰する場合、一定の条件を加えさせて頂く場合があります。<br>
                    （6） 学習指導の時間帯と料金は飽くまでも目安となります。時間を延長して授業を受けた場合や、時間を短縮して授業を受けた場合は30分単位の清算になります。<br>
                    （7） 季節や時間帯によって（ 講師のスケジュールの都合上 ）、指導日時が塾優先で相談させていただく場合があります。<br>
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
                    <p>・〔 国立大学・私立大学 〕　志望校受験 + 定期試験対策<br>
・〔 高専生 〕定期試験対策( 重積分、ラプラス変換、フーリエ解析まで指導します )
</p>
                    <h3>中学生 ＆ 高校受験生</h3>
                    <p>
                        ・〔 TOP高 狙い撃ち 〕　ナンバースクール ＆ 国立高専狙い撃ち<br>
中学3年生への進級を待たずに、中学生範囲の数学や英語の学習を終える生徒さんもいます。（ ご希望の場合、高校生範囲の数学や英語も指導します。 ）<br>
・〔 定期試験 ＆ 実力試験対策 〕 総合学力の充実<br>
「 定期試験の対策 」と「 模擬試験の対策 」が学習指導の中心になります。<br>
・〔 ベーシック ＆ 定期試験 〕　基礎学力の充実<br>
「 既習範囲の確認 及び 基礎学力の定着 」と「 定期試験の対策 」が学習指導の中心になります。学習習慣の定着が目標になります。
                    </p>
                    <h3>小学生</h3>
                    <p>
                        ・〔 予習 + 復習 〕　学習習慣の定着<br>
学校の授業内容の予習と復習が中心になります。算数(数学)や英語の先取り学習や、各種検定試験対策も行います。いっしょに『 We can 』の学習も行えます。
                    </p>
<br>
<p>『 ふりスタ 』は「 <span class="strong">新しくて、自由な学習スタイル</span> 」の確立を目指しております。</p>
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
スキルアップの為、大手家庭教師塾（K）に約10年間勤務。そのほとんどの期間を宮城県No.1 家庭教師として実績を残しました。満を持しての独立開業です。<br>
あらゆる塾業界を経験した教室長が選択した学習指導スタイルは『 超・個別指導 』です。
</span></p><br>

<img src="/images/banners/daigaku.png" alt="" width="230" class="alignleft" />

<p>以下は過去の合格実績の一部です。</p>
<p>☆   <span class="notice">I・K くん</span>（Ｈ29）<span class="strong">東北福祉大学・総合福祉学部・社会福祉学科</span>（ＡＯ入試２期）<br>
（Ｈ26）<span class="highschool">柴田高校・体育学科</span>（前期選抜）【 大河原中学校出身 】</p>

<p>☆   <span class="notice">H・M さん</span>（Ｈ29）<span class="highschool">柴田高校・普通科</span>（前期選抜試験）【 福岡中 】</p>

<p>☆   <span class="notice">H・O さん</span>（Ｈ29）<span class="highschool">大河原商業・流通マネジメント科</span>（前期選抜試験）【白石東中】</p>

<p>☆   <span class="notice">R・O くん</span>（Ｈ28）<span class="strong">仙台高専・電気科専攻科</span>（推薦合格）≪4年生まで指導≫<br>
　　　　　　（Ｈ24）<span class="strong">仙台高専・電気システム学科</span>（一般受験）【 角田中学校出身 】</p>

<p>☆   <span class="notice">Y・H くん</span>（H27）<span class="strong">東北大学法学部</span>（センター試験及び２次試験での数学指導）<br>
　　　　　　（H24）<span class="highschool">仙台三高合格</span>（後期選抜）</p>

<p>☆   <span class="notice">I・S くん</span>（Ｈ28）<span class="strong">東北福祉大学健康科学部リハビリテーション学科作業療法学専攻</span>
(校内推薦合格)<br>
　　　　　　（Ｈ25）<span class="highschool">泉松陵高校・普通科</span>（後期選抜試験）【 金ケ瀬中学校出身 】</p>

<p>☆   <span class="notice">Y・H くん</span>（Ｈ27）<span class="strong">東北大学法学部（センター試験及び２次試験での数学指導）</span><br>
　　　　　　（Ｈ24）<span class="highschool">仙台三高合格</span>（後期選抜）</p>

<p>☆   <span class="notice">M・S さん</span>（Ｈ27）<span class="strong">福島大学・人文社会科学群・人間発達文化学類</span>（推薦合格）<br>
　　　　　　（Ｈ24）<span class="highschool">白石高校・普通科合格</span>【 白石東中学校出身 】</p>

<br>
<p>☆   【 H28 】　<span class="strong">新潟薬科大学・薬学部</span>【白石高】、 <span class="strong">新潟薬科大学・薬学部</span>仙台高専・建築デザイン学科</span>（推薦合格）、<span class="highschool">柴田高校</span>（普通科）、<span class="strong">盛岡大学</span>（文学部）、<span class="strong">仙台高専・建築デザイン学科</span>（推薦合格）【遠刈田中学校出身】</p>
<p>☆   【 H27 】　<span class="highschool">名取北高</span>（後期選抜）、 <span class="highschool">宮城第一高等学校</span>（後期選抜）【角田中出身】</p>
<p>☆   【 H26 】　<span class="highschool">白石高校・看護学科</span>（後期選抜）【白石東中学校出身】、<span class="strong">仙台高専・マテリアル環境</span>（推薦合格）【金津中学校出身】</p>

<p>☆   【 H25 】　<span class="strong">山形大学医学部看護学科</span>（センター試験での数学指導【白石高】、<span class="highschool">尚絅学院中学、村田高校、角田高校、白石工業</span>（機械科）、<span class="highschool">白石工業</span>（電気科）</p>

<p>【 その他 】　<span class="strong">東北文化学園大学、工学院大学</span>、<span class="highschool">白石工業高等学校</span>（２名、電気科、機械科）、<span class="strong">宮城教育大学中等教育教員養成課程後期合格</span>（数学指導）、<span class="strong">仙台大学</span>（校内推薦）、<span class="highschool">角田高校 、白石高校、村田高校</span>（推薦合格）、<span class="highschool">村田高校</span>（一般受験）、<span class="highschool">名取高校</span></p>
<br>
<br>
<p>≪　特に多い進学先　≫</p>
<p>・<span class="strong">仙台高専</span>（３名うち２名が推薦合格）</p>
<p>・<span class="highschool">白石高校</span>（4名うち1名が看護学科）</p>
<p>・<span class="highschool">柴田高校</span>（5名うち2名が前期合格）</p>
<p>・<span class="highschool">村田高校</span>（3名うち1名が推薦合格）</p>
<p>・<span class="highschool">角田高校</span>（3名）</p>
<p>・<span class="strong">東北福祉大学</span>（3名）</p>
<p>・<span class="strong">東北学院大学</span>（2名）</p>

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
