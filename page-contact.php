<?php get_header(); ?>
<main class="contact">
    <div class="container">
        <div class="contact__inner">
            <div class="contact__img">
                <img src="<?php echo get_theme_file_uri() . '/images/mail_1920.png'; ?>" alt="メールのアイコン">
            </div>
            <div class="contanct__content">
                <h2>お問い合わせ</h2>
                <p class="contact__text">お客様の満足度を最優先に考えており、専任のカスタマーサポートチームがご注文や商品に関するお問い合わせに迅速に対応いたします。<br>
                    お部屋のアドバイスやスタイリングの提案も行っており、あなたの理想の空間を実現するお手伝いをさせていただきます。
                </p>
                <div class="form">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>