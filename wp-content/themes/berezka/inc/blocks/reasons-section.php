<?php 
$subtitle = get_field('subtitle');
$title = get_field('title');
$description = get_field('description');
?>
<section class="reasons">
    <div class="container">
        <div class="reasons__container">
            <?php if($subtitle): ?>
            <div class="section-subtitle">
                <span><?php echo $subtitle; ?></span>
            </div>
            <?php endif; ?>
            <?php if($title): ?>
            <div class="reasons__title">
                <h1><?php echo $title; ?></h1>
            </div>
            <?php endif; ?>
            <?php if($description): ?>
            <div class="reasons__text">
                <p><?php echo $description; ?></p>
            </div>
            <?php endif; ?>
            <ul class="reasons__list">
                <?php if( have_rows('list') ): ?>
                <?php while( have_rows('list') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title')
                    ?>
                <li>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="" role="presentation"> <?php echo $title; ?>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>