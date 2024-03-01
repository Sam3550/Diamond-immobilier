<?php get_header() ?>

<header></header>

<main class="main">

    <section class="section content">
        <div class="container content__container">
            <div class="content__container_illustration" style="background-image: url('<?php bloginfo("template_url"); ?>/assets/images/annonces/appartement.png')">

            </div>
            <div class="content__container_informations">
                <h1 class="content__container_informations_title">T2 à Bruz</h1>
                <div class="content__container_informations_tags">


                    <div class="content__container_informations_tags_city">
                        <svg class="content__container_informations_tags_city_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        <p class="content__container_informations_tags_city_label">Bruz</p>
                    </div>
                    <p class="content__container_informations_tags_offer content__container_informations_tags_offer--rent">À louer</p>
                </div>

                <p class="content__container_informations_price">104 000€</p>
                <div class="content__container_informations_description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam expedita itaque aspernatur cumque libero aut? Ut velit atque dolorum odit ipsum exercitationem quis quisquam assumenda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section other">
        <div class="container container__other">

            <h2 class="section__title">Nos autres annonces</h2>

            <ul class="goodsGrid">
                <li class="goodCard">
                    <a href="#" class="goodCard__box">
                        <div class="goodCard__box_thumbnail" style="background-image: url('<?php bloginfo("template_url"); ?>/assets/images/annonces/appartement.png')">
                            <p class="goodCard__box_thumbnail_tag goodCard__box_thumbnail_tag--sell">À vendre</p>
                        </div>
                        <div class="goodCard__box_content">
                            <h3 class="goodCard__box_content_title">T2 à Bruz</h3>
                            <p class="goodCard__box_content_type">Appartement</p>
                            <p class="goodCard__box_content_price">104 000€</p>
                        </div>
                    </a>
                </li>
                <li class="goodCard">
                    <a href="#" class="goodCard__box">
                        <div class="goodCard__box_thumbnail" style="background-image: url('<?php bloginfo("template_url"); ?>/assets/images/annonces/villa.png')">
                            <p class="goodCard__box_thumbnail_tag goodCard__box_thumbnail_tag--rent">À louer</p>
                        </div>
                        <div class="goodCard__box_content">
                            <h3 class="goodCard__box_content_title">Villa à Rennes</h3>
                            <p class="goodCard__box_content_type">Maison</p>
                            <p class="goodCard__box_content_price">1 105 000€</p>
                        </div>
                    </a>
                </li>
                <li class="goodCard">
                    <a href="#" class="goodCard__box">
                        <div class="goodCard__box_thumbnail" style="background-image: url('<?php bloginfo("template_url"); ?>/assets/images/annonces/base.png')">
                            <p class="goodCard__box_thumbnail_tag goodCard__box_thumbnail_tag--rent">À louer</p>
                        </div>
                        <div class="goodCard__box_content">
                            <h3 class="goodCard__box_content_title">Villa à Bruz</h3>
                            <p class="goodCard__box_content_type">Maison</p>
                            <p class="goodCard__box_content_price">4 505 000€</p>
                        </div>
                    </a>
                </li>
                <li class="goodCard">
                    <a href="#" class="goodCard__box">
                        <div class="goodCard__box_thumbnail" style="background-image: url('<?php bloginfo("template_url"); ?>/assets/images/annonces/lake.png')">
                            <p class="goodCard__box_thumbnail_tag goodCard__box_thumbnail_tag--sell">À vendre</p>
                        </div>
                        <div class="goodCard__box_content">
                            <h3 class="goodCard__box_content_title">T1 à Bruz</h3>
                            <p class="goodCard__box_content_type">Maison</p>
                            <p class="goodCard__box_content_price">250 000€</p>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </section>

</main>

<?php get_footer() ?>