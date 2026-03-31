<?php get_header(); ?>

    <main class="news-article">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
        <h2 class="title">NEWS</h2>
        <div class="article-container">
            <h3><?php the_time('Y.m.d'); ?>
            <?php $terms = get_the_terms(get_the_ID(),'news_category'); if(!empty($terms)): ?>
            <?php echo esc_html($terms[0]->name); ?>
            <?php endif; ?><br><span><?php the_title(); ?></span></h3>
            <?php the_post_thumbnail(null, array('class' => 'single_main_thumb')); ?>
            <div class="article-text">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
            endwhile;
        else:
            ?>
        <p>投稿データはありません</p>
        <?php endif; ?>
        
        <button type="button" onclick="history.back()">戻る</button>
    </main>

<?php get_footer(); ?>