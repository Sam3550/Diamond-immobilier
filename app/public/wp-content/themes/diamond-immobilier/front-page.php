<?php get_header() ?>

<header class="header" style="background-image: url('<?php the_field('home__header_background'); ?>')">

    <div class="header__overlay">

        <div class="container header__overlay_container">


            <h1 class="header__overlay_container_title"><span class="header__overlay_container_title_span"><?php the_field('home__header_title'); ?></span><br /><?php the_field('home__header_description'); ?></h1>
            <a class="button white outlined header__overlay_container_button" href="<?php the_field('home__header_btn_link'); ?>"><?php the_field('home__header__btn_title'); ?> </a>


        </div>

    </div>

</header>

<main class="main">
    <section class="section featured">
        <div class="container featured__container">
            <h2 class="section__title"><?php the_field('home__firstsection_title'); ?></h2>

            <ul class="featured__container_grid goodsGrid">


                <?php
                $args = array(
                    'post_type' => 'annonce',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                ?>

                <?php $the_query = new WP_Query($args); ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <li class="goodCard">
                            <a href=""<?php the_permalink(); ?>" class="goodCard__box">
                                <div class="goodCard__box_thumbnail" style="background-image: url('<?php the_field('annonce__background'); ?>')">
                                    <p class="goodCard__box_thumbnail_tag goodCard__box_thumbnail_tag--sell"><?php foreach (get_the_terms(get_the_ID(), 'offre') as $term) : ?>

                                            <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>

                                        <?php endforeach; ?>
                                    </p>
                                </div>

                                <div class="goodCard__box_content">
                                    <h3 class="goodCard__box_content_title"><?php the_field('annonce__title'); ?></h3>
                                    <p class="goodCard__box_content_type"><?php the_field('annonce__description'); ?></p>
                                    <p class="goodCard__box_content_price"><?php the_field('annonce__price'); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_query(); ?>
                <?php wp_reset_postdata(); ?>
            </ul>

            <a class="button blue featured__container_cta" href="<?php the_field('home__firstsection_btn_link'); ?>"><?php the_field('home__firstsection_btn_description'); ?></a>
        </div>
    </section>

    <section class="section cities">
        <div class="container cities__container">
            <h2 class="section__title"><?php the_field('home__secondsection_title'); ?></h2>

            <ul class="cities__container_list">

                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'ville',
                    'hide_empty' => true,
                ));
                ?>

                <?php foreach ($terms as $term) : ?>
                    <li class="cities__container_list_city" style="background-image: url('<?php the_field('ville__background', $term); ?>')">
                        <a class="cities__container_list_city_overlay" href="<?php echo get_term_link($term); ?>">
                            <h3 class="cities__container_list_city_overlay_title"><?php echo $term->name; ?></h3>
                        </a>
                    </li>

                <?php endforeach; ?>


            </ul>

            <a class="button white cities__container_cta" href="#"><?php the_field('home__secondsection_btn_description'); ?></a>

        </div>

        <!-- <script>
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                // loop: true,
                // freeMode: true,
                grabCursor: true,
                // touchEventsTarget: 'wrapper',
                touchMoveStopPropagation: true,
                // touch: {
                //     enabled: true,
                // },
                // eventsTarget: 'swiper-wrapper',

                slidesPerView: 'auto', // Affiche autant de diapositives que possible
                spaceBetween: 25, // Espace entre les diapositives
            });
        </script> -->
    </section>

    <section class="section values">
        <div class="container values__container">
            <h2 class="section__title"><?php the_field('home__thirdsection_title    '); ?></h2>

            <ul class="values__container_list">


                <?php if (have_rows('home__thirdsection_card')) : ?>
                    <?php while (the_repeater_field('home__thirdsection_card')) : ?>


                        <?php the_sub_field('subfield_name'); ?>
                        <li class="values__container_list_value">
                            <img class="values__container_list_value_icon" src="<?php the_sub_field('home__thirdsection_card_svg'); ?>" alt="">

                            <h3 class="values__container_list_value_title"><?php the_sub_field('home__thirdsection_card_title'); ?></h3>
                            <div class="values__container_list_value_description">
                                <p><?php the_sub_field('home__thirdsection_card_description'); ?></p>
                            </div>
                        </li>


                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>


            </ul>

        </div>
    </section>
</main>

<?php get_footer() ?>