<?php get_header(); ?>


<main class="menu">
        <h2 class="title">MENU</h2>
        <div class="tab-container">
            <ul class="tab-title">
                <li class="selected" data-id="tab-1">All</li>
                <li data-id="tab-2">Coffee</li>
                <li data-id="tab-3">Food</li>
                <li data-id="tab-4">Other</li>
            </ul>
            <div class="tab-content selected accordion-list" id="tab-1">
                <div class="detail-list">
                    <h3>Coffee</h3>
                    <ul>
                        <li>
                            <img src="<?php the_field('item_image1'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en1'); ?></p>
                            <p><?php the_field('item_name_jp1'); ?></p>
                            <p class="price"><?php the_field('item_price1'); ?></p>
                            <p><?php the_field('item_text1'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image2'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en2'); ?></p>
                            <p><?php the_field('item_name_jp2'); ?></p>
                            <p class="price"><?php the_field('item_price2'); ?></p>
                            <p><?php the_field('item_text2'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image3'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en3'); ?></p>
                            <p><?php the_field('item_name_jp3'); ?></p>
                            <p class="price"><?php the_field('item_price3'); ?></p>
                            <p><?php the_field('item_text3'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image4'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en4'); ?></p>
                            <p><?php the_field('item_name_jp4'); ?></p>
                            <p class="price"><?php the_field('item_price4'); ?></p>
                            <p><?php the_field('item_text4'); ?></p>
                        </li>
                    </ul>
                    <h3>Food</h3>
                    <ul>
                        <li>
                            <img src="<?php the_field('item_image5'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en5'); ?></p>
                            <p><?php the_field('item_name_jp5'); ?></p>
                            <p class="price"><?php the_field('item_price5'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image6'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en6'); ?></p>
                            <p><?php the_field('item_name_jp6'); ?></p>
                            <p class="price"><?php the_field('item_price6'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image7'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en7'); ?></p>
                            <p><?php the_field('item_name_jp7'); ?></p>
                            <p class="price"><?php the_field('item_price7'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image8'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en8'); ?></p>
                            <p><?php the_field('item_name_jp8'); ?></p>
                            <p class="price"><?php the_field('item_price8'); ?></p>
                        </li>
                    </ul>
                    <h3>Other</h3>
                    <ul>
                        <li>
                            <img src="<?php the_field('item_image9'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en9'); ?></p>
                            <p><?php the_field('item_name_jp9'); ?></p>
                            <p class="price"><?php the_field('item_price9'); ?></p>
                            <p><?php the_field('item_text9'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image10'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en10'); ?></p>
                            <p><?php the_field('item_name_jp10'); ?></p>
                            <p class="price"><?php the_field('item_price10'); ?></p>
                            <p><?php the_field('item_text10'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image11'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en11'); ?></p>
                            <p><?php the_field('item_name_jp11'); ?></p>
                            <p class="price"><?php the_field('item_price11'); ?></p>
                            <p><?php the_field('item_text11'); ?></p>
                        </li>
                        <li>
                            <img src="<?php the_field('item_image12'); ?>" alt="コーヒーの画像">
                            <p><?php the_field('item_name_en12'); ?></p>
                            <p><?php the_field('item_name_jp12'); ?></p>
                            <p class="price"><?php the_field('item_price12'); ?></p>
                            <p><?php the_field('item_text12'); ?></p>
                        </li>
                    </ul>
                </div>
                <p class="link-button"><a class="more-button">もっと見る</a></p>
                <p class="link-button" style="display:none;"><a class="close-button">閉じる</a></p>
            </div>
            <div class="tab-content" id="tab-2">
                <ul>
                    <li>
                        <img src="<?php the_field('item_image1'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en1'); ?></p>
                        <p><?php the_field('item_name_jp1'); ?></p>
                        <p class="price"><?php the_field('item_price1'); ?></p>
                        <p><?php the_field('item_text1'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image2'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en2'); ?></p>
                        <p><?php the_field('item_name_jp2'); ?></p>
                        <p class="price"><?php the_field('item_price2'); ?></p>
                        <p><?php the_field('item_text2'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image3'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en3'); ?></p>
                        <p><?php the_field('item_name_jp3'); ?></p>
                        <p class="price"><?php the_field('item_price3'); ?></p>
                        <p><?php the_field('item_text3'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image4'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en4'); ?></p>
                        <p><?php the_field('item_name_jp4'); ?></p>
                        <p class="price"><?php the_field('item_price4'); ?></p>
                        <p><?php the_field('item_text4'); ?></p>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="tab-3">
                <ul>
                    <li>
                        <img src="<?php the_field('item_image5'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en5'); ?></p>
                        <p><?php the_field('item_name_jp5'); ?></p>
                        <p class="price"><?php the_field('item_price5'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image6'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en6'); ?></p>
                        <p><?php the_field('item_name_jp6'); ?></p>
                        <p class="price"><?php the_field('item_price6'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image7'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en7'); ?></p>
                        <p><?php the_field('item_name_jp7'); ?></p>
                        <p class="price"><?php the_field('item_price7'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image8'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en8'); ?></p>
                        <p><?php the_field('item_name_jp8'); ?></p>
                        <p class="price"><?php the_field('item_price8'); ?></p>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="tab-4">
                <ul>
                    <li>
                        <img src="<?php the_field('item_image9'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en9'); ?></p>
                        <p><?php the_field('item_name_jp9'); ?></p>
                        <p class="price"><?php the_field('item_price9'); ?></p>
                        <p><?php the_field('item_text9'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image10'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en10'); ?></p>
                        <p><?php the_field('item_name_jp10'); ?></p>
                        <p class="price"><?php the_field('item_price10'); ?></p>
                        <p><?php the_field('item_text10'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image11'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en11'); ?></p>
                        <p><?php the_field('item_name_jp11'); ?></p>
                        <p class="price"><?php the_field('item_price11'); ?></p>
                        <p><?php the_field('item_text11'); ?></p>
                    </li>
                    <li>
                        <img src="<?php the_field('item_image12'); ?>" alt="コーヒーの画像">
                        <p><?php the_field('item_name_en12'); ?></p>
                        <p><?php the_field('item_name_jp12'); ?></p>
                        <p class="price"><?php the_field('item_price12'); ?></p>
                        <p><?php the_field('item_text12'); ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </main>

<?php get_footer('white'); ?>