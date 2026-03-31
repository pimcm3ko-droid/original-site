    <footer class="white">
        <div class="wave wave-blue wave-white"></div>

        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>">

        <ul>
            <li><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url( home_url('/') ); ?>#concept">CONCEPT</a></li>
            <li><a href="<?php echo esc_url( home_url('/menu') ); ?>">MENU</a></li>
            <li><a href="<?php echo esc_url( get_post_type_archive_link('news') ); ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url( home_url('/') ); ?>#onlineshop">ONLINE SHOP</a></li>
            <li><a href="<?php echo esc_url( home_url('/shopinformation') ); ?>">SHOP INFORMATION</a></li>
            <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">CONTACT</a></li>
        </ul>
        <div class="wrapper">
            <a class="icon" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/icon1.png'); ?>"></a>
            <a class="icon" href="https://line.me/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/icon2.png'); ?>" class="line"></a>
        </div>

        <p class="address">&#12306;000-0000<br>神奈川県横浜市 HYGGEBUILDING 1F<br>HYUGGE CAFE</p>
        
        <p class="copy">&copy;2024 HYGGE CAFE. All Rights Reserved.</p>
        <p class="policy">[Privacy Policy] | [Terms of Service]</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/main.js"></script>
<?php wp_footer('white'); ?>
</body>

</html>