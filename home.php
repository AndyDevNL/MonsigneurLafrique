<?php
/**
 * Template Name: Home page
 * Description: A Page Template with a darker design.
 */


// $context = Timber::get_context();
// $post = new TimberPost();
// $context['post'] = $post;
// Timber::render( array( 'page-' . $post->post_name . '.twig', 'pages\home.twig' ), $context );

$args = array(
    'post_type' => 'post'
);

$post = new TimberPost();

$context = Timber::get_context();
$context['posts'] = Timber::get_posts( $args );
$context['post'] = $post;
$templates = array( 'pages/home.twig' );
if ( is_front_page() ) {
  array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render( $templates, $context );