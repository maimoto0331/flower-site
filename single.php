<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part('assets/header'); ?>
    <section class="sec">
        <div class="container wrapper">           
            <div class="article_row">
               <?php if (have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <article id-="<?php the_ID(); ?>" <?php post_class('article'); ?>>
                                <header class="article_header">
                                    <h2 class="article_title"><?php the_title(); ?></h2>
                                    <div class="article_meta">
                                        <?php the_category(); ?>
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                    </div>
                                </header>
                                <div class="article_pic">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/noimage_600x400.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="article_body">
                                    <div class="content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="postLinks">
                                    <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
                                    <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="side_bar">
                        <aside>
                            <?php get_sidebar('categories'); ?>
                            <?php get_sidebar('archives'); ?>
                        </aside>
                    </div>
            </div>

        </div>

   </section>

    <? get_template_part('includes/footer'); ?>
    <? get_footer(); ?>

</body>
</html>
