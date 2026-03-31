<?php get_header(); ?>

    <main class="news">
        <h2 class="title">NEWS</h2>
        <div class="tab-container">
            <ul class="news-filter">

                <li class="<?php if(is_post_type_archive('news')) echo 'active'; ?>">
                    <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">ALL</a>
                </li>

                <?php
                $terms = get_terms(array(
                'taxonomy' => 'news_category',
                'hide_empty' => true
                ));
                ?>

                <?php foreach($terms as $term): ?>

                <li class="<?php if(is_tax('news_category', $term->slug)) echo 'active'; ?>">
                    <a href="<?php echo esc_url(get_term_link($term)); ?>">
                    <?php echo esc_html($term->name); ?>
                    </a>
                </li>

                <?php endforeach; ?>

            </ul>

            <div class="tab-content selected" id="tab-1">
                <ul class="news-list">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>

                    <li class="article">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <div class="inner">
                                <p><?php the_time('Y.m.d'); ?>
                                <?php $terms = get_the_terms(get_the_ID(),'news_category'); if(!empty($terms)): ?>
                                <span><?php echo esc_html($terms[0]->name); ?>
                                </span><?php endif; ?></p>
                                <p class="article-title"><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php
                        endwhile;
                    else:
                        ?>
                    <p>投稿データがありませんでした</p>
                    <?php endif; ?>
                </ul>

                <?php
                the_posts_pagination(array(
                'mid_size' => 1,
                'prev_text' => '«',
                'next_text' => '»'
                ));
                ?>
            </div>
        </div>
    </main>

<?php get_footer('white'); ?>