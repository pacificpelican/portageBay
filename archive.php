<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php httpdjmcloud_danieljmckeown_com_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
