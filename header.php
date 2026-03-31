<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>HYUGGE CAFE</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo.png">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1 class="close-logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>"></a></h1>
        
        <nav>
            <div class="inner">
                <h1 class="open-logo"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>"></h1>
                <p class="address">&#12306;000-0000<br>神奈川県横浜市 HYGGEBUILDING 1F<br>HYUGGE CAFE</p>
            </div>
            <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
                <li><a href="<?php echo is_front_page()?'#concept': esc_url( home_url('/#concept') ); ?>">CONCEPT</a></li>
                <li><a href="<?php echo esc_url( home_url('/menu') ); ?>">MENU</a></li>
                <li><a href="<?php echo esc_url( get_post_type_archive_link('news') ); ?>">NEWS</a></li>
                <li><a href="<?php echo is_front_page()?'#onlineshop': esc_url( home_url('/#onlineshop') ); ?>">ONLINE SHOP</a></li>
                <li><a href="<?php echo esc_url( home_url('/shopinformation') ); ?>">SHOP INFORMATION</a></li>
                <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">CONTACT</a></li>
            </ul>
        </nav>

        <div class="wrapper">
            <div class="sns">
                <a class="icon" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/icon1.png'); ?>"></a>
                <a class="icon" href="https://line.me/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/icon2.png'); ?>" class="line"></a>
            </div>


            <div class="toggle_btn">
                <span></span>
                <span></span>           
                <span></span>           
            </div>
        </div>
    </header>
