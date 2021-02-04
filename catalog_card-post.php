<div class="col-md-4">
    <img src="<?php the_field('catalog_card_photo'); ?>" alt="Рольставни">
    <div class="main-info">
        <div class="main-area">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s_ready_house/squered.png" alt="squered">
            <p><?php the_field('catalog_card_lock_top_text'); ?></p>
            <span><?php the_field('catalog_card_lock_bottom_text'); ?></span>
        </div>
        <div class="size">
            <a href="#s_calc" class="scroll"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/calc.png" alt="size"></a>
            <p><?php the_field('catalog_card_calc_top_text'); ?></p>
            <span><?php the_field('catalog_card_calc_bottom_text'); ?></span>
        </div>
    </div>
    <div class="main-price">
        <p><?php the_field('catalog_card_center_top_text'); ?></p>
        <span><?php the_field('catalog_card_center_bottom_text'); ?></span>
        <a href="#calc-dialog" class="popup-with-move-anim"><button><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/s_ready_house/magnifier.png"
                    alt="magnifier">Узнать
                подробнее</button></a>
    </div>
</div>