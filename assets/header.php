<header class="page-header wrapper">
        <div class="top_header">
            <h1><a href="<?php echo home_url(); ?>"><img class="logo"src="<?php echo get_template_directory_uri(); ?>/images/logo (4).png" alt="HeartFlower ホーム"></a></h1>
            <nav>
                <ul class="main-nav">
                    <li><a class="jump_btn" href="#NEWS">News</a></li>
                    <li><a class="jump_btn" href="#MENU">Menu</a></li>
                    <li><a class="jump_btn" href="#CONTACT">Contact</a></li>
                </ul>
            </nav>
        </div>
        <?php if(is_home()) : ?>
            <div class="sliderArea">
                <div class="header_pic slider regular">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bouquet04.jpg" alt="ホーム画像"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bouquet02.jpg" alt="ホーム画像"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bouquet01.jpg" alt="ホーム画像"></div>
                </div>
            </div>
            <div class="site_intro">
                <h1><img class="logo"src="<?php echo get_template_directory_uri(); ?>/images/logo (4).png" alt="HeartFlower ホーム"></h1>
                <h2>大切な人へ、真心込めて</h2></br>
                <p>誕生日に、記念日に、お祝いの日に。大切な人への感謝を込めて、お花のプレゼントはいかがでしょうか。
                    もらった人が思わず笑顔になれるような、そんなお花たちをご用意しております。
                </p>
                <div class="button_intro">
                    <!-- <a class="button" href="">概要はこちら</a> -->
                </div>
            </div>
        <?php endif; ?>
   </header>