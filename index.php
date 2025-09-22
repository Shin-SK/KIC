<?php
get_header();
?>

<div class="loader" id="loader">
    <div class="spinner">
        <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg">
    </div>
</div>

<div class="snap-sections">

    <section class="kv">

        <div class="left">
            <div class="wrap">
                <div class="head">
                    <div class="t1">Keep</div>
                    <div class="t2">Integrity</div>
                    <div class="t3">Connection</div>
                </div><!-- head -->
                <div class="head-2">
                    <span>人と企業を信頼で結ぶ</span>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/KV.webp">
        </div>

    </section>


    <section class="message container">
        <div class="message__wrap">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.svg">
            </div>
            <div class="text row">
                <div class="title-area mb-4 col-md-6 col-12">
                    <div class="title">必要なのは、バイタリティと、信頼。</div>
                    <div class="name">代表取締役社長　加藤 生馬</div>
                </div>
                <div class="qa-area col-md-6 col-12">
                    <div class="wrap">
                        <div class="q">社会の変化が激しい中で、御社が言う「対応力」とは。
                        </div>
                        <div class="a">事実を集めて仮説を立て、すぐ試し、出た結果で次の一手を決める力です。完璧を待たずに小さく始め、学びを積み上げる姿勢を指します。
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="q">「信頼」をどう築く。単純だけど、複雑です。</div>
                        <div class="a">まず、約束を明確にして守ること。難しければ早めに相談すること。伝えるときは、事実を先に、意見や提案をそのあとに置くこと。相手の状況を想像し、社内外のすべてをお客様として扱うこと。この積み重ねが信頼になります。</div>
                    </div>
                    <div class="wrap">
                        <div class="q">評価される人材像、そして失敗への向き合い方は。</div>
                        <div class="a">失敗自体は問題ではなく、放置が問題です。小さく検証→共有→是正→再実行ができ、相手の成果にどう貢献したかを言語化できる人を評価します。私たちは「成長・変化・改善・実行」を通じて結びつきを強め、信頼に応え続けます。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner">

        <div class="mainTitle">Partner</div>

        <div class="partner__wrap container">
            <div class="area">
                <?php
                    $dir_path = get_template_directory() . '/common/images/partner';
                    $files = glob($dir_path . '/*.{jpg,jpeg,png,gif,webp,svg}', GLOB_BRACE) ?: [];

                    /* 並び順：
                    1) 先頭が「数字-」(例: 01-softbank.*) を優先（数字の小さい順）
                    2) それ以外はベース名の自然順（大文字小文字を無視）
                    */
                    usort($files, function($a, $b){
                        $na = strtolower(basename($a));
                        $nb = strtolower(basename($b));

                        $pa = preg_match('/^(\d+)-/', $na, $ma) ? (int)$ma[1] : PHP_INT_MAX;
                        $pb = preg_match('/^(\d+)-/', $nb, $mb) ? (int)$mb[1] : PHP_INT_MAX;

                        if ($pa !== $pb) return ($pa < $pb) ? -1 : 1;   // 01-, 02-… を先に
                        return strnatcasecmp($na, $nb);                 // 残りを自然順で
                    });

                    /* 以降そのまま出力 */
                    if ($files) {
                        foreach ($files as $file) {
                            $filename = basename($file);
                            $img_url = get_template_directory_uri() . '/common/images/partner/' . $filename;
                            echo '<div class="item"><img src="'. esc_url($img_url) .'" alt=""></div>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>

</div>

    <section class="about">

        <div class="subtitle">
            接客販売における営業促進を主軸として<br>
            販売手法のセールスアウトソーシング等各種方面からの営業支援を行っております
        </div>
        <div class="about__wrap container">

            <div class="area">
                <div class="box box1">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/01.webp">
                    </div>
                    <div class="wrap">
                        <div class="title">人材派遣</div>
                        <p>企業様が求めるスキルと経験を備えた人材を、繁忙期や新店立ち上げなどのタイミングに合わせ柔軟に派遣します。即戦力として現場に早期定着し、売上と顧客満足の両立に貢献します。
                        </p>
                    </div>
                </div>
                <div class="box box2">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/02.webp"></div>
                    <div class="wrap">
                        <div class="title">アウトソーシング</div>
                        <p>売場運営、販促実務、棚卸・レポーティングなどの業務をワンストップで代行。繁閑に応じて必要なリソースだけをスケールでき、固定費を抑えながら成果に集中できます。
                        </p>
                    </div>
                </div>
                <div class="box box3">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/03.webp"></div>
                    <div class="wrap">
                        <div class="title">インターネット広告サービス</div>
                        <p>サンプルテキストサンプルテキストサンプルテキスト</p>
                    </div>
                </div>
                <div class="box box4">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/04.webp"></div>
                    <div class="wrap">
                        <div class="title">リユース事業</div>
                        <p>
                            サンプルテキストサンプルテキストサンプルテキスト
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=stat_minus_2" />

    <section class="voice container">
        <div class="mainTitle">Voice</div>
        
        <div class="voice__wrap">
            <div class="box box1">
                <div class="photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/v-1.jpg">
                    <div class="midashi">
                        信頼は、現場で積み上げる。
                    </div>
                </div>
                <div class="text">
                    <!-- <div class="kana">Kannna Hashimoto</div>
                    <div class="name">橋本環奈</div>
                    <div class="position">営業部 部長</div> -->
                    <p>
入社後はロープレ・同行・振り返りで「伝え方」「数字の見方」を実践で吸収。<br>
仮説→実行→検証の結果は日々の数字とお客様の反応で“手応え”として返ってきます。<br>
将来はトレーナーやプロジェクトリーダー、販促企画などキャリアの広がりもあります。<br>
「人と向き合い、結果で語りたい」その想いがあるなら、ここで一気に伸びるチャンスです。
                    </p>
                </div>
            </div>


            <div class="box box2">
                <div class="photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/v-2.jpg">
                    <div class="midashi">
                        挑戦の後ろに、安心の土台。
                    </div>
                </div>
                <div class="text">
                    <!-- <div class="kana">Michopa</div>
                    <div class="name">池田美優</div>
                    <div class="position">総務部</div> -->
                    <p>
私たちは採用・入社手続き・備品・労務・情報管理まで、会社の“当たり前”を整えるチームです。<br>
現場の迷いを減らし、挑戦のスピードを落とさない仕組みづくりがミッションです。<br>
申請やフローはシンプルに、ルールはわかりやすく、トラブルは未然に。<br>
小さな改善を積み重ねて、生産性と働きやすさの両方を上げていきます。<br>
                </p>
                </div>
            </div>

            <div class="box box3">
                <div class="photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/v-3.jpg">
                    <div class="midashi">
                        段取りで、会社はもっと速くなる。
                    </div>
                </div>
                <div class="text">
                    <!-- <div class="kana">Naoki Hanzawa</div>
                    <div class="name">半沢直樹</div>
                    <div class="position">秘書課 課長</div> -->
                    <p>
経営と現場、社内とクライアントをつなぎ、情報と予定の“渋滞”を解消。<br>
会議は「決める場」に、施策は「動く状態」に仕上げる――それが私たちの仕事です。<br>
アポ調整、資料の要点化、議事のタスク化、関係者の合意形成までをワンストップで推進。<br>
優先順位を整理し、ボールを落とさず前に進める段取り力が武器になります。<br>
                </p>
                </div>
            </div>

        </div>

    </section>

    <section class="recruit">
        <div class="mainTitle">
            RECRUIT
        </div>
    <div class="subTitle">
            販売・営業スキルを身に付けたい人材を募集しています<br>
            私達と一緒に働きませんか？
        </div>
        
        <div class="cv">
            <a href="#contact">応募フォーム<span class="material-symbols-outlined">stat_minus_2</span></a>
        </div>
    </section>


    <section class="company">
        <div class="mainTitle">Company</div>

        <div class="company__wrap container">
            <div class="head">商号</div>
            <div class="text">株式会社KIC</div>

            <div class="head">設立</div>
            <div class="text">2015年12月7日</div>

            <div class="head">資本金</div>
            <div class="text">1,000万円</div>

            <div class="head">代表取締役社長</div>
            <div class="text">加藤 生馬</div>

            <div class="head">労働者派遣事業許可番号</div>
            <div class="text">派13-310962</div>

            <div class="head">有料職業紹介事業許可番号</div>
            <div class="text">13-ユ-311077</div>

            <div class="head">税理士</div>
            <div class="text"><a href="https://nakaikaikei.jp/" target="_blank">税理士法人 Novera Consulting</a></div>

            <div class="head">社労士</div>
            <div class="text"><a href="https://sr-station.com/offices/%E7%B4%85%E6%9E%97%E5%8A%B4%E5%8B%99%E7%AE%A1%E7%90%86%E4%BA%8B%E5%8B%99%E6%89%80/">紅林労務管理事務所</a></div>


            <div class="head">取引銀行</div>
            <div class="text">
                - みずほ銀行<br>
                - 楽天銀行<br>
                - GMOあおぞらネット銀行<br>
                - さわやか信用金庫<br>
                - 東京シティ信用金庫
            </div>

            <div class="head">本社</div>
            <div class="text">
                〒160-0023<br>
                東京都新宿区西新宿7-19-21 厳島ビル3階
            </div>

            <div class="head">TEL / FAX</div>
            <div class="text">03-6712-7096</div>

            <div class="head">MAIL</div>
            <div class="text">info@k-i-c.com</div>
        </div>


    </section>

    <section class="map">

        <div class="map__wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22650.446050856117!2d139.68450534790745!3d35.67542389352668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d0d3caa7ea1%3A0xf70b5c24d0c0a06f!2z5qCq5byP5Lya56S-S0lD!5e0!3m2!1sja!2sjp!4v1743406888850!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

    <section class="pp">
        
        <div class="mainTitle" data-toggle="pp">Privacy<i class="fas fa-chevron-right"></i></div>

        <div class="pp__wrap" data-content="pp" style="display: none;">
            <div class="area">
                <p class="br container">株式会社KIC（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。

                個人情報の管理
                当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行ないます。
                個人情報の利用目的
                お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                個人情報の第三者への開示・提供の禁止
                当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。

                ・お客さまの同意がある場合
                ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合
                ・法令に基づき開示することが必要である場合
                個人情報の安全対策
                当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。
                ご本人の照会
                お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                法令、規範の遵守と見直し
                当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                お問い合せ
                当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。

                株式会社KIC

                〒160-0023 東京都新宿区西新宿7-19-21 厳島ビル3階
                TEL / FAX : 03-6712-7096
                MAIL : info@k-i-c.com
                </p>
            </div>
        </div>

    </section>

    <section class="contact" id="contact">
        <div class="mainTitle">CONTACT</div>

        <div class="contact__wrap">
            <?php get_template_part('common/parts/contact' , 'inner'); ?>
        </div>

    </section>


    <footer class="footer">
        <div class="wrap">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo-wh.svg">
            </div>
            <div class="menu">
                <ul>
                    <?php get_template_part('common/include/' , 'nav-inner'); ?>
                </ul>
            </div>
        </div>
        <div class="cr">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            </a>
        </div>
    </footer>


<?php
get_footer();