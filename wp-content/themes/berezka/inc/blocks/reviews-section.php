<section class="reviews">
    <div class="container">
        <div class="section-title">
            <h2>Reviews <span>of our clients</span></h2>
        </div>
        <div class="swiper-container">
            <div class="reviews__slider swiper swiper-pagination-mobile">
                <div class="swiper-wrapper">
                    <?php
                      $args = array(
                          'post_type' => 'testimonials',
                          'posts_per_page' => -1,
                      );
                      
                      $testimonials_query = new WP_Query($args);
                      ?>
                      <?php if ($testimonials_query->have_posts()) : ?>
                          <?php while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
                          <div class="swiper-slide">
                        <article class="reviews__item">
                            <div class="reviews__item-info">
                                <div class="reviews__item-author">
                                    <div class="reviews__item-author__avatar">
                                        <?php echo the_post_thumbnail(); ?>
                                    </div>
                                    <div class="reviews__item-author__name">
                                        <h3><?php echo the_title(); ?></h3>
                                    </div>
                                </div>
                                <div class="reviews__item-rating">
                                    <div class="reviews__item-rating__stars rating-4 rating-half">
                                    <?php $stars = get_field('stars', get_the_ID()); ?>
                                      <?php for($i = 1; $i <= $stars; $i++) { ?>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0491 12.7584C14.0491 12.7584 15.002 18.3129 15.0052 18.3314C15.002 18.331 10.0777 17.0839 10.0008 17.0646C10 17.0642 4.47404 19.9697 4.47404 19.9697C4.03098 20.2023 3.51387 19.8264 3.59838 19.3334L4.65351 13.1797L0.183081 8.82195C-0.175471 8.47265 0.0225168 7.8646 0.517488 7.79257L6.69577 6.89478L9.45875 1.29638C9.56942 1.07223 9.78471 0.959961 10 0.959961L12.5026 7.9982L18.0986 8.81149L14.0491 12.7584Z"
                                                fill="#D8DDE4" />
                                            <path
                                                d="M19.4825 7.79257L13.3042 6.89478L10.5412 1.29638C10.4306 1.07223 10.2153 0.959961 10 0.959961L10.0008 17.0646L15.526 19.9697C15.969 20.2023 16.4861 19.8264 16.4016 19.3334L15.3465 13.1797L19.8169 8.82195C20.1755 8.47265 19.9775 7.8646 19.4825 7.79257Z"
                                                fill="#D8DDE4" />
                                        </svg>
                                        <?php } ?>
                                    </div>
                                    <span><?php echo $stars; ?></span>
                                </div>
                            </div>
                            <div class="reviews__item-content">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</q>
                            </div>
                        </article>
                    </div>
                         <?php  endwhile;
                          wp_reset_postdata(); 
                      endif;
                      ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-buttons">
                <div class="swiper-button-prev">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.255689 6.51423L4.62631 3.0358C5.07806 2.6857 5.75567 3.00192 5.75567 3.57789V4.74114C5.75567 5.11382 6.00413 5.44134 6.37682 5.44134H13.3224C13.6951 5.44134 14 5.71239 14 6.09637V7.92593C14 8.28733 13.6951 8.60355 13.3224 8.60355H6.37682C6.00413 8.60355 5.75567 8.89729 5.75567 9.26987V10.4331C5.75567 10.9978 5.07806 11.314 4.6376 10.9639L0.278275 7.57583C-0.0831194 7.31608 -0.0944128 6.78528 0.255689 6.51423Z"
                            fill="#BCDDD5" />
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.7443 6.51423L9.37369 3.0358C8.92194 2.6857 8.24433 3.00192 8.24433 3.57789V4.74114C8.24433 5.11382 7.99587 5.44134 7.62318 5.44134H0.677616C0.304927 5.44134 0 5.71239 0 6.09637V7.92593C0 8.28733 0.304927 8.60355 0.677616 8.60355H7.62318C7.99587 8.60355 8.24433 8.89729 8.24433 9.26987V10.4331C8.24433 10.9978 8.92194 11.314 9.3624 10.9639L13.7217 7.57583C14.0831 7.31608 14.0944 6.78528 13.7443 6.51423Z"
                            fill="#BCDDD5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>