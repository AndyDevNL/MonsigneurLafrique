<?php
/**
 * Template Name: Dispuut template
 * Template Post Type: disputen
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
$templates = array( 'pages/group.twig' );
Timber::render( $templates, $context );