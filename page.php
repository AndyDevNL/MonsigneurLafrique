<?php
/**
 * Template Name: Standaard page
 * Template Post Type: page, post
 * Description: A Page Template with a darker design.

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$post = new TimberPost();

$postMeta = $post.get_field('content-selector');

require_once(ABSPATH . 'wp-admin/includes/file.php');
$path = get_home_path();


$context['user_sigmar'] = new Timber\User(2);
$context['post_meta'] = $postMeta;
$context['post'] = $post;
$context['path'] = $path;
Timber::render( array( 'page-' . $post->post_name . '.twig', 'pages\page.twig' ), $context );
