<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Portage Bay
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>



<div class="container">
	<div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m6">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-content-send"></i></h2>
						<div id="secondary" class="widget-area" role="complementary">
							<p class="light"><?php dynamic_sidebar( 'sidebar-1' ); ?></p>
					</div><!-- #secondary -->
				</div>
			</div>

			<div class="col s12 m6">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-file-cloud-queue"></i></h2>
						<div id="secondary2" class="widget-area" role="complementary">
							<p class="light"><?php dynamic_sidebar( 'sidebar-2' ); ?></p>
					</div><!-- #secondary -->
				</div>
			</div>


		</div>

	</div>
