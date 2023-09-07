<?php 
$title = get_field('title');
?>
<section class="steps">
    <div class="container">
        <?php if($title): ?>
        <div class="section-title">
            <?php echo $title; ?>
        </div>
        <?php endif; ?>
        <div class="steps__container">
            <?php if( have_rows('items') ): ?>
            <?php while( have_rows('items') ): the_row(); 
              $raccoon_book = get_sub_field('raccoon_book');
              $title = get_sub_field('title');
              $description = get_sub_field('description');
              $step_side = get_sub_field('step_side');
              $step_bottom = get_sub_field('step_bottom');
              $step_mobile = get_sub_field('step_mobile');
            ?>
            <article class="steps__item">
              <?php if($raccoon_book): ?>
                <div class="steps__item-ico">
                    <img src="<?php echo esc_url($raccoon_book['url']); ?>" alt="" role="presentation">
                </div>
                <?php endif; ?>
                <div class="steps__item-text">
                  <?php if($title): ?>
                    <div class="steps__item-title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <?php endif; ?>
                    <?php if($description): ?>
                    <p><?php echo $description; ?></p>
                    <?php endif; ?>
                </div>
                <div class="steps__item-num"></div>
                <?php if($step_side): ?>
                <div class="steps__item-steps-side">
                    <img src="<?php echo esc_url($step_side['url']); ?>" alt="" role="presentation">
                </div>
                <?php endif; ?>
                <?php if($step_bottom): ?>
                <div class="steps__item-steps-bottom">
                    <img src="<?php echo esc_url($step_bottom['url']); ?>" alt="" role="presentation">
                </div>
                <?php endif; ?>
                <?php if($step_mobile): ?>
                <div class="steps__item-steps-mobile">
                    <img src="<?php echo esc_url($step_mobile['url']); ?>" alt="" role="presentation">
                </div>
                <?php endif; ?>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>