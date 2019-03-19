<?php
get_header();

$args = array(
    'type'                     => 'post',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => 1,
    'hierarchical'             => 1,
    'exclude'                  => '',
    'include'                  => '',
    'number'                   => '',
    'taxonomy'                 => 'product',
    'pad_counts'               => false 
); 

$categories = get_categories( $args );

foreach ( $categories as $cat ) {

    $posts_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'products',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product',
                    'field' => 'term_id',
                    'terms' => $cat->term_id,
                )
            )
        )
    );
}
?>

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<?php print_r($posts_array); ?>

<?php
    get_footer();
?>