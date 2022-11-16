<?php

function montheme_support() {
    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'montheme_support');

function goel_menus(){
    $locations = array(
        'primary' => "Headers",
        'footer' => "Footer"
    );
    register_nav_menus($locations);
}

add_action('init', 'goel_menus');



add_action( 'widgets_init', 'Contact_Formulaire' );

function Contact_Formulaire() {
    register_sidebar( array(
        'name'          => 'Contact Formulaire',
        'id'            => 'nouvelle_zone',
    ) );
}

?>