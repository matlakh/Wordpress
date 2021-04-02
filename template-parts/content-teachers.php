<?php
    $args = array(
          'posts_per_page' => 4,
          'order' => 'DESC',
          'post_type' => 'our_team'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
        $query->the_post();
        ?> 

        <div class="team-item">
                    <div class="team-img mx-auto">
                        <img class="rounded-circle w-100 h-100" src="<?php echo get_the_post_thumbnail_url()?>" style="object-fit: cover;">
                    </div>
                    <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                        <h3 class="font-weight-bold mt-5 mb-3 pt-5"><?php the_title() ?></h3>
                        <h6 class="text-uppercase text-muted mb-4"><?php the_content() ?></h6>
                        <?php 
                        $twitter = carbon_get_the_post_meta('team_twitter');
                        $facebook = carbon_get_the_post_meta('team_facebook');
                        $linkedin = carbon_get_the_post_meta('team_linkedin');
                        ?>
                        <div class="d-flex justify-content-center pt-1">
                            <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $twitter ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $facebook?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $linkedin?>"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
        </div>
        <?
                        }
                    } else {
                        ?>
                        <h2>Увы, постов тут нет!</h2>
                        <?
                    }
                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
 
?>