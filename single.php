<?php
/**
 * The template for displaying all single posts.
 *
 * @package Portage Bay
 */

get_header(); ?>

<div class="row"> 
    <div class="col s12 m12 l3" id="portagelargeonly">
				
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

	<div id="primary" class="content-area col s12 m10 l7">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php httpdjmcloud_danieljmckeown_com_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
