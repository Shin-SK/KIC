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
            <div class="text">
                <p class="br">目まぐるしく変化する社会。
                現代のビジネスシーンにおいて、様々な環境の変化に対応するスキルと成長を続けるバイタリティが常に必要とされています。

                しかし、求められているものはそれだけではありません。
                いつの時代も、人と人を結ぶのは「信頼」。
                信頼なき視点しか持てないのであれば、どんなに優秀でも発展に限りがあるのではないでしょうか。

                向き合う全ての人がお客様と考え、お取引先様との営業パートナーとして相応しい人材としてあり続ける。

                私たちは、成長し、変化し、改善し、実行することで結びつきを強め、信頼に応えて参ります。
                </p>
                <div class="name">代表取締役社長　加藤 生馬</div>
            </div>
        </div>
    </section>

    <section class="partner">

        <div class="mainTitle">Partner</div>

        <div class="partner__wrap container">
            <div class="area">
                <?php
                    $dir_path = get_template_directory() . '/common/images/partner';
                    $files = glob($dir_path . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

                    // ファイルが存在すればループで表示
                    if($files) {
                        foreach($files as $file) {
                            // ファイル名だけを抜き出してIMGタグに挿入
                            $filename = basename($file);
                            $img_url = get_template_directory_uri() . '/common/images/partner/' . $filename;
                            ?>
                            <div class="item">
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                            <?php
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
                        <p>企業様が求めるスキルと、経験を持ち合わせている人材を、必要な期間や時期に応じて派遣するサービスです。</p>
                    </div>
                </div>
                <div class="box box2">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/02.webp"></div>
                    <div class="wrap">
                        <div class="title">アウトソーシング</div>
                        <p>業務効率化や品質向上などのニーズに対応すべく、最適なトータルソリューションをご提案するサービスです。</p>
                    </div>
                </div>
                <div class="box box3">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/03.webp"></div>
                    <div class="wrap">
                        <div class="title">人材派遣</div>
                        <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                    </div>
                </div>
                <div class="box box4">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/04.webp"></div>
                    <div class="wrap">
                        <div class="title">人材派遣</div>
                        <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
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
                        ここでしかできない事があるから<br>
                        私はここにいる
                    </div>
                </div>
                <div class="text">
                    <div class="kana">Kannna Hashimoto</div>
                    <div class="name">橋本環奈</div>
                    <div class="position">営業部 部長</div>
                    <p>コメントはたくさん長くなっても、一言でもお顔が見えていて、言葉が伝われば必要十分かと思っています。語りたいことが多ければ別ページに飛ばしてひとつVoiceようのスペシャルページを作ってインタビュー形式にしても良いかと思います。
                    </p>
                </div>
            </div>


            <div class="box box2">
                <div class="photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/v-2.jpg">
                    <div class="midashi">
                        誰かのために仕事をすることを<br>
                        学びました
                    </div>
                </div>
                <div class="text">
                    <div class="kana">Michopa</div>
                    <div class="name">池田美優</div>
                    <div class="position">総務部</div>
                    <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
                    </p>
                </div>
            </div>

            <div class="box box3">
                <div class="photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/v-3.jpg">
                    <div class="midashi">
                        やられたらやり返す・・・倍返しだ
                    </div>
                </div>
                <div class="text">
                    <div class="kana">Naoki Hanzawa</div>
                    <div class="name">半沢直樹</div>
                    <div class="position">秘書課 課長</div>
                    <p>サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
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

            <div class="head">取引銀行</div>
            <div class="text">
            - みずほ銀行 青葉台支店<br>
            - 楽天銀行<br>
            - 横浜信用金庫
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