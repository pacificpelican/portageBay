<?php
/**
 * The template for displaying search results pages.
 *
 * @package Portage Bay
 */

get_header(); ?>


<div class="row">
<div class="container" id="bigscreenwidgets">
   <div class="col s12 m12 l2 container" id="portagelargeonly">
   <ul class="section">
        <li>
            <div class="section-header">
            </div>
                    	<div class="section-body">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
					     </div><!-- #secondary -->
				</li>
      </ul>	
	</div>
</div>

	<div class="content-area col s11 m10 l6 offset-l1" id="keycontentarea">

		<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
