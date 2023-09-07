<?php 
$title = get_field('title');
?>
<section class="services" id="services">
    <div class="container">
        <div class="section-title">
            <h2>Our <span>Services</span></h2>
        </div>
        <div class="services__container">
            <?php if( have_rows('services') ): ?>
            <?php while( have_rows('services') ): the_row(); 
                  $icon = get_sub_field('icon');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $button = get_sub_field('button');

                ?>
            <article class="services__item">
                <div class="services__item-head">
                    <?php if($icon): ?>
                    <div class="services__item-ico">
                        <img src="<?php echo esc_url($icon['url']); ?>" alt="" role="presentation">
                    </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                    <div class="services__item-title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($description): ?>
                <div class="services__item-text">
                    <p><?php echo $description; ?></p>
                </div>
                <?php endif; ?>
                <?php if($button): ?>
                <div class="services__item-link">
                    <a href="openPopup-form-popup"><?php echo $button; ?></a>
                </div>
                <?php endif; ?>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>