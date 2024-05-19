
<?php get_header();?>
<main class="main-secondary pt-32 px-10">
<?php




if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
echo get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
        
		get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
	}

	// Previous/next page navigation.
	//twenty_twenty_one_the_posts_navigation();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}
the_content();

?>





</main>
<?php
get_footer();
?>