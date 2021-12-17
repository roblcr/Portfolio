<?php

// ===========================================================================================
// Configuration du thème
// ===========================================================================================

function oprofileCours_initialize()
{
    // configuration des fonctionnalités de notre thème
    // DOC WP theme activer fonctionnalité https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support('post-thumbnails');   // activation de l'image de mise en avant sur les articles
    add_theme_support('title-tag');
}

// on enregistre un hook pour activer les fonctionnalités gérées par notre thème
add_action('after_setup_theme', 'oprofileCours_initialize');