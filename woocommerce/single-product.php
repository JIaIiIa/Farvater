<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<?php get_template_part('search-sec'); ?>
<?php while (have_posts()): ?>
    <?php the_post(); ?>

    <section class="card_product">
        <div class="container">
            <div class="card_wrapepr">
                <div class="card_slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        global $product;
                        $attachment_ids = $product->get_gallery_image_ids();
                        if ($attachment_ids) {
                            foreach ($attachment_ids as $attachment_id) {
                                $image_url = wp_get_attachment_url($attachment_id);
                                echo '<img class="swiper-slide" src="' . esc_url($image_url) . '" alt="">';
                                $bullet_images[] = esc_url($image_url);
                            }
                        } else {
                            echo '<img class="swiper-slide" src="' . get_template_directory_uri() . '/assets/img/main/default_product.png" alt="">';
                        }
                        ?>
                    </div>
                    <div class="card_pagination swiper-pagination">

                    </div>
                    <div class="card_button">
                        <button class="card_prev"><img
                                src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-prev.svg" alt=""></button>
                        <button class="card_next"><img
                                src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow-next.svg" alt=""></button>
                    </div>
                </div>

                <div class="card_name">
                    <div class="card_tag">
                        <div>
                            <p><?php echo $product->get_categories(', '); ?></p>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="card_social">
                            <button><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/export.svg"
                                    alt=""></button>
                        </div>
                    </div>
                    <div class="articul_card">
                        <span class="medal_blue"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/discount.svg"
                                alt="">В наличии</span>
                        <p>Арт. <?php echo $product->get_sku(); ?></p>
                    </div>
                    <div class="car_decription">
                        <span class="description_bullet">Описание:</span>
                        <a id="openPopup" href="javascript:;">Все характеристики</a>
                    </div>
                    <?php the_content(); ?>
                    <div class="span_discount card">
                        <?php if ($product->is_on_sale()): ?>
                            <span class="span_price"><?php echo wc_price($product->get_regular_price()); ?></span>
                            <span class="span_procent"><img
                                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/discountFlag.png" alt="">
                                <p><?php echo round((($product->get_regular_price() - $product->get_sale_price()) / $product->get_regular_price()) * 100); ?>%
                                </p>
                            </span>
                        <?php endif; ?>
                    </div>
                    <p class="price_boat card"><?php echo wc_price($product->get_price()); ?></p>
                    <div class="card_btns">
                        <a class="blue_btn srch_btn openSignPop" href="javascript:;">Оставить заявку</a>
                        <a class="srch_btn blue_btn openSignPop" href="#">Позвоните мне!</a>
                    </div>
                </div>
                <div id="popupSignOverlay" class="overlaySign">
                    <div id="popupSign" class="popupSign">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/logo.png" alt=""
                                width="221px" height="52px"></a>
                        <p>Заявка<br><span>на бесплатную консультацию</span><br>нашего менеджера</p>
                        <div class="form_all">
                            <form class="form_pop" action="">
                                <div class="form_pop_img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/User_1.svg" alt="">
                                </div>
                                <input type="name" placeholder="Как вас зовут?">
                            </form>

                            <form class="form_pop" action="">
                                <div class="form_pop_img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/User_2.svg" alt="">
                                </div>
                                <input type="tel" placeholder="+7 (___) ___-__-__">
                            </form>
                        </div>
                        <a class="popup_btnSign">Получить консультацию</a>
                        <img class="pop_img_1" src="<?php bloginfo('template_url'); ?>/assets/img/main/popvec_1.svg" alt="">
                        <img class="pop_img_2" src="<?php bloginfo('template_url'); ?>/assets/img/main/popvec_2.svg" alt="">
                    </div>
                </div>
                <div id="popupOverlay" class="overlay">
                    <div id="popup" class="popup">
                        <div class="pop_name">
                            <p>Катер</p>
                            <h3>NorthSilver 585 Fish Sport</h3>
                        </div>
                        <div class="specs_boat_all bigger">
                            <div class="specs_boat">
                                <p>Страна бренда:</p><span class="dotted_span"></span>
                                <p>Китай</p>
                            </div>
                            <div class="specs_boat">
                                <p>Длина, см:</p><span class="dotted_span"></span>
                                <p>550</p>
                            </div>
                            <div class="specs_boat">
                                <p>Ширина, см:</p><span class="dotted_span"></span>
                                <p>220</p>
                            </div>
                            <div class="specs_boat">
                                <p>Гарантия на товар:</p><span class="dotted_span"></span>
                                <p>2 года</p>
                            </div>
                            <div class="specs_boat">
                                <p>Страна производства:</p><span class="dotted_span"></span>
                                <p>Индонезия</p>
                            </div>
                        </div>
                        <button id="closePopup" class="popup_btn">Закрыть</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        var bulletImages = <?php echo json_encode($bullet_images); ?>;
    </script>
<?php endwhile; // end of the loop. ?>


<section class="similar_items">
    <div class="container">
        <div class="similar_items_tag">
            <h2>Похожие товары</h2>
            <a href="javascript:;">Другие товары<img
                    src="<?php bloginfo('template_url'); ?>/assets/img/icons/arrow_btn_right.svg" alt=""></a>
        </div>
        <div class="boats_main product">
            <?php
            $categories = wp_get_post_terms($product->get_id(), 'product_cat', array('fields' => 'ids'));

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 3, 
                'post__not_in' => array($product->get_id()),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'term_id',
                        'terms' => $categories,
                    ),
                ),
            );
            $related_products = new WP_Query($args);

            if ($related_products->have_posts()) {
                while ($related_products->have_posts()) {
                    $related_products->the_post();
                    $related_product = wc_get_product(get_the_ID());
                    ?>
                    <div class="bam_list">
                        <div class="bam_slider swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $attachment_ids = $related_product->get_gallery_image_ids();
                                foreach ($attachment_ids as $attachment_id) {
                                    $image_url = wp_get_attachment_url($attachment_id);
                                    echo '<img class="boat_image swiper-slide" src="' . esc_url($image_url) . '" alt="Изображение товара" width="369px" height="246px">';
                                }
                                ?>
                            </div>
                            <div class="boat_pagination swiper-pagination"></div>
                        </div>
                        <div class="boat_text">
                            <p><?php echo wc_get_product_category_list($related_product->get_id()); ?></p>
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="boat_text_2">
                            <span class="medal_blue">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/discount.svg" alt="">
                                <?php echo $related_product->is_in_stock() ? 'В наличии' : 'Нет в наличии'; ?>
                            </span>
                            <div class="span_discount">
                                <?php if ($related_product->get_sale_price()): ?>
                                    <span class="span_price old_price"><?php echo wc_price($related_product->get_regular_price()); ?></span>
                                    <span class="span_procent">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/discountFlag.png" alt="">
                                        <p><?php echo round((($related_product->get_regular_price() - $related_product->get_sale_price()) / $related_product->get_regular_price()) * 100); ?>%</p>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <p class="price_boat"><?php echo wc_price($related_product->get_price()); ?></p>
                        </div>
                        <a class="boats_btn" href="<?php the_permalink(); ?>">Подробнее</a>
                        <div class="specs">
                            <div class="specs_boat_all">
                                <?php
                                $attributes = $related_product->get_attributes();
                                foreach ($attributes as $attribute) {
                                    if ($attribute->get_visible() && ($attribute->is_taxonomy() || $attribute->get_options())) {
                                        $name = wc_attribute_label($attribute->get_name());
                                        $value = implode(', ', wc_get_product_terms($related_product->get_id(), $attribute->get_name(), array('fields' => 'names')));
                                        if ($value) {
                                            echo '<div class="specs_boat">';
                                            echo '<p>' . esc_html($name) . ':</p><span class="dotted_span"></span>';
                                            echo '<p>' . esc_html($value) . '</p>';
                                            echo '</div>';
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="slider_right product">
            <div class="slider_right_items product swiper-container">
            <?php
                    $args = array(
                        'post_type' => 'promotions', // Замените на ваш кастомный тип записи
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'promotions_category', // Замените на вашу таксономию, если это не стандартная категория
                                'field' => 'slug',
                                'terms' => 'besplatno',
                            ),
                        ),
                    );

                    // Новый WP_Query
                    $query = new WP_Query($args);

                    // Запуск цикла
                    if ($query->have_posts()) { ?>
                        <div class="swiper-wrapper">
                            <?php
                            while ($query->have_posts()) {
                                $query->the_post();

                                ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_the_permalink(); ?>"><img class="swiper_image"
                                            src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                                    <div class="front_text"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/priceless.svg" alt=""
                                            width="42px" height="42px">
                                        <div>
                                            <h4><?php the_title(); ?></h4>
                                            <p>БЕСПЛАТНО</p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="slider_pag swiper-pagination"></div>
                    <?php } ?>
            </div>
            <?php
                $args = array(
                    'post_type' => 'promotions', // Замените на ваш кастомный тип записи
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'promotions_category', // Замените на вашу таксономию, если это не стандартная категория
                            'field' => 'slug',
                            'terms' => 'skidka',
                        ),
                    ),
                );

                // Новый WP_Query
                $query = new WP_Query($args);

                // Запуск цикла
                if ($query->have_posts()) { ?>
                    <div class="slider_right_items second product swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            while ($query->have_posts()) {
                                $query->the_post();

                                ?>

                                <div class="swiper-slide">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <img class="swiper_image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </a>
                                    <div class="front_text"><img
                                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/procent.svg" alt=""
                                            width="42px" height="42px">
                                        <div>
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_field('skidka'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="second_pag swiper-pagination"></div>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>
<?php get_template_part('order-sec'); ?>

<?php

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
