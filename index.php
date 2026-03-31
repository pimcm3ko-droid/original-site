
<?php get_header(); ?>
<section class="mainvisual">
            <h2>HYUGGE CAFE</h2>

            <ul class="slide">
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual1.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual2.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual3.jpg'); ?>"></li>
            </ul>

            <div class="scroll">
                <span>Scroll</span>
            </div>
        </section>

        <section class="concept" id="concept">
            <h3 class="section-title">CONCEPT</h3>
            <div class="wrapper fadein">
                <p>“心やすらぐ、ひとときを”</p>
                <p>HYGGE CAFE（ヒュッゲカフェ）は、北欧のライフスタイル<br>Hyggeからインスピレーションを得たカフェです。</p>
                <p>「Hygge（ヒュッゲ）」とは、<br>デンマーク語で「居心地の良い雰囲気」や<br>「心地よい時間」を意味する言葉。</p>
                <p>忙しさに追われる毎日に、<br>「ほっと一息つける場所を提供したい」<br>「日常のスピードを少しだけ緩める場所を作りたい」<br>という想いからこのカフェを始めました。</p>
                <p>シンプルで美しいインテリア、厳選されたオーガニック素材、<br>そして温かな光に包まれた空間で、<br>あなたの大切な時間をお過ごしください。</p>
            </div>
            <div class="bg"></div>
        </section>
        
        <section class="toppage_menu" id="">
            <h3 class="section-title">MENU</h3>

            <div class="wrapper fadein">
                <ul>
                    <li>
                        <p>COFFEE</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu1.jpg'); ?>">
                    </li>
                    <li>
                        <p>FOOD</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu2.jpg'); ?>">
                    </li>
                    <li>
                        <p>OTHER</p>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/menu3.jpg'); ?>">
                    </li>
                </ul>
                <div class="text">
                    <p>コーヒーは当店のオリジナルブレンドを<br>ハンドドリップで一杯一杯丁寧に抽出しています。</p>
                    <p>当店で仕込んだサンドイッチやスイーツも<br>各種ご用意しています。</p>
                    
                    <a class="btn" href="<?php echo esc_url( home_url('/menu') ); ?>">Read More</a>
                </div>
            </div>
        </section>
        
        <section class="toppage_news" id="">
            <h3 class="section-title">NEWS</h3>

            <?php $args = array( 'post_type' => 'news', 'posts_per_page' => 3 ); $query = new WP_Query($args); ?>
            
            <?php if($query->have_posts()): ?>

            <div class="wrapper fadein">
                <ul>
                    <?php while($query->have_posts()): $query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_time('Y.m.d'); ?>
                        <?php $terms = get_the_terms(get_the_ID(),'news_category'); if(!empty($terms)): ?>
                        <span><?php echo esc_html($terms[0]->name); ?></span>
                        <?php endif; ?>
                        <?php the_title(); ?>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <a class="btn" href="<?php echo esc_url( get_post_type_archive_link('news') ); ?>">Read More</a>
            </div>
        </section>

        <section class="slick-area">
            <ul class="slide-items">
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/slick1.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/slick2.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/slick3.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/slick4.jpg'); ?>"></li>
                <li><img src="<?php echo esc_url(get_template_directory_uri() . '/img/slick5.jpg'); ?>"></li>
            </ul>
        </section>

        <section class="onlineshop" id="onlineshop">
            <h3 class="section-title">ONLINE SHOP</h3>

            <div class="wrapper fadein">
                <div class="images">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/onlineshop1.jpg'); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/onlineshop2.jpg'); ?>">

                </div>
                <div class="text">
                    <p>コーヒー豆、ドリップパック、北欧雑貨の販売もしています。</p>
                    <a class="btn" href="<?php echo esc_url( home_url() ); ?>">online shop</a>
                </div>
            </div>
        </section>

        <section class="toppage_shopinformation" id="">
            <h3 class="section-title">SHOP INFORMATION</h3>
            
            <div class="wrapper fadein">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/shopinformation.jpg'); ?>">

                <p class="shopname">HYGGE CAFE</p>
                <p class="address">&#12306;000-0000<br>神奈川県横浜市 HYGGEBUILDING 1F</p>

                <a class="btn" href="<?php echo esc_url( home_url('/shopinformation') ); ?>">Read More</a>
            </div>
        </section>

        <section class="toppage_contact" id="">
            <a href="<?php echo esc_url( home_url('/contact') ); ?>">
                <p class="contact_title">CONTACT→<span><br>お問い合わせ</span></p>
                <p class="text">ご質問、ご要望、貸切のご相談など、お気軽にお問い合わせください。</p>
            </a>
        </section>

    </main>
<?php get_footer(); ?>