<?php
                    $args = array(
                        'posts_per_page' => 4,
                        'order' => 'DESC',
                        'orderby' => 'data'
                    );

                    $query = new WP_Query($args);
                    // Цикл
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                    <div class="service-item">
                        <div class="service-img mx-auto">
                            <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php echo get_the_post_thumbnail_url();?>" style="object-fit: cover;">
                        </div>
                        <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                            <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php the_title(); ?></h5>
                            <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                            <a href="<?php the_permalink();?>" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
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