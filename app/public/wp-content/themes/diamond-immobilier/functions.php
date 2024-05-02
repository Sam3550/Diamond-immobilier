<?php

add_theme_support('menus');
add_theme_support('title-tag');


register_nav_menus([
    'main-navigation' => 'Navigation principale',
    'social-networks' => 'Réseau Sociaux',
    'footer-legal' => 'Liens Légeaux'
]);    


// Activation de la prise en charge du logo personnalisé
add_theme_support('custom-logo', array(
    'height'      => 100, // Hauteur maximale du logo
    'width'       => 400, // Largeur maximale du logo
    'flex-height' => true, // Autoriser la hauteur flexible
    'flex-width'  => true, // Autoriser la largeur flexible
));

// Affichage du logo dans l'en-tête (vous pouvez le placer où vous en avez besoin dans votre thème)
function afficher_logo() {
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

