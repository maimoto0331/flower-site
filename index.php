<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part('assets/header'); ?>
   <section class="sec">
        <div class="container wrapper">
            <header class="sec_header" id = "NEWS">
                <h2 class="page-title">NEWS</h2>
            </header>             
            <div class="row">
            <?php
            $args = array(
            'posts_per_page' => 3 // 表示件数の指定
             );
            $posts = get_posts( $args );
            foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
            ?>
            <div class="col">
                    <?php get_template_part('template-parts/loop','news'); ?>
            </div>
            <?php
            endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
            </div>
            <p class="sec_btn">
                <a href="<?php echo $news_link; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
            </p>
        </div>
   </section>
   <section>
        <div class="container wrapper">
            <header class="sec_header" id = "MENU">
                <h2 class="page-title">MENU</h2><p>-季節の花を各種取り揃えております-</p>
            </header>
            <div class="row">
                <?php
                $args = array(
                'post_type' => 'item',
                'posts_per_page' => 3 // 表示件数の指定
                );
                $posts = get_posts( $args );
                foreach ( $posts as $post ): // ループの開始
                setup_postdata( $post ); // 記事データの取得
                ?>
                <div class="col">
                        <?php get_template_part('template-parts/loop','news'); ?>
                </div>
                <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>
            </div>
            <p class="sec_btn">
                <a href="<?php echo $news_link; ?>" class="btn btn-default">商品一覧ページ<i class="fas fa-angle-right"></i></a>
            </p>
    </div>
   </section>
   <section>
        <div class="container wrapper">
            <header class="sec_header" id="CONTACT">
                <h2 class="page-title">CONTACT</h2>
            </header>
    </div>
   </section>
   <div class="sec_body contact">
            <div class="contact_body">
                    </br>
                    <i class="fas fa-phone"></i>
                    <a href="">03-1234-5678</a>              
            </div>
            </br><p>平日：10:00〜22:00／土日祝：10:00〜18:00</p></br></br>
        </div>

   <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>
  

    <?php get_template_part('assets/footer'); ?>

<?php get_footer(); ?>   
</body>
</html>
