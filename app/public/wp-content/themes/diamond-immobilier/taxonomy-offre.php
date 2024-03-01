<?php $term = get_queried_object(); ?>
<?php get_header() ?>

<header class="header">
    <div class="container header__container">
        <h1 class="header__container_title"><?php single_term_title(); ?></h1>
    </div>
</header>

<main class="main">
    <section class="section goods">
        <ul class="container goodsGrid">

            <?php if (have_posts()) : ?>

                <!-- Boucle sur toutes publications -->
                <?php while (have_posts()) : the_post(); ?>

                    <!-- Affiche les informations de la publication affichée -->
                    <?php the_title(); ?>

                    
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
            

        </ul>
    </section>
</main>

<?php get_footer() ?>