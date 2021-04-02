<?php
                    $args = array(
                        'posts_per_page' => 4,
                        'order' => 'DESC',
                        'orderby' => 'products'
                    );

                    $query = new WP_Query($args);
                    // Цикл
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="<?php echo get_the_post_thumbnail_url()?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?php the_title() ?></h5>
                        <a href="#" class="btn btn-sm btn-secondary">Order Now</a>
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