<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<?php //get_template_part('template-parts/blocks/title-block-template') ?>
<?php //get_template_part('template-parts/blocks/about-template') ?>

<?php
$image_directory  = '/template-parts/blocks/';
$image_path       = get_stylesheet_directory() . $image_directory . '*.php'; // get all jpeg files.
$file_list        = glob( $image_path );
foreach ($file_list as $file) {
    get_template_part("template-parts/blocks/$file");
    echo $file;
}

?>

