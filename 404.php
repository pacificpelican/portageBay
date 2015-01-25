<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Portage Bay
 */

get_header(); ?>

<div class="row" id="portageuppercontent">
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( '404 Not Found.', 'httpdjmcloud-danieljmckeown-com' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Nothing is currently at this URL.', 'httpdjmcloud-danieljmckeown-com' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( httpdjmcloud_danieljmckeown_com_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'httpdjmcloud-danieljmckeown-com' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

</div></div>
<?php get_footer(); ?>
