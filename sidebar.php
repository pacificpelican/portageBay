<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Portage Bay
 */
?>




</div><!-- end of row 1 -->


<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	if ( ! is_active_sidebar( 'sidebar-2' ) ) {
		if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
}
}
?>



<div class="container portage2widgets">
	<div class="section" id="portageresponsivelowerwidgets">

			<div class="row" id="portagesmallonly">

				<div class="col s12 m11 l7 offset-l2">
					<div class="icon-block">
						 <div id="secondary" class="widget-area" role="complementary">
							<p class="light"><?php dynamic_sidebar( 'sidebar-3' ); ?></p>
					     </div><!-- #secondary -->
					</div>
				</div>

			</div>
	</div>
</div>
<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
}
?>
		<!--   Icon Section   -->
		<div class="row" id="portagelowerwidgetscontainer">
			<div class="col s12 m6 l5 offset-l2" id="portagelowerleftwidgets">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-content-send"></i></h2>
						<div id="secondary" class="widget-area" role="complementary">
							<p class="light"><?php dynamic_sidebar( 'sidebar-1' ); ?></p>
					</div><!-- #secondary -->
				</div>
			</div>
<?php
	if ( ! is_active_sidebar( 'sidebar-2' ) ) {
			echo "</div></div><!-- portage2widgets -->";
			return;
}
?>
			<div class="col s12 m6 l4 offset-r2" id="portagelowerrightwidgets">
				<div class="icon-block">
					<h2 class="center light-blue-text"><i class="mdi-file-cloud-queue"></i></h2>
						<div id="secondary2" class="widget-area" role="complementary">
							<p class="light"><?php dynamic_sidebar( 'sidebar-2' ); ?></p>
						</div><!-- #secondary -->
				</div>
			</div>


		</div>


</div><!-- portage2widgets -->
