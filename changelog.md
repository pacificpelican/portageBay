Portage Bay theme http://djmcloud.danieljmckeown.com/portagebay/

change log ["-" is like a checkbox; "x-" is a wontfix; null is a todo]

updates due for version 0.2.0
Jan. 7, 2015
-local jQuery call
-nav bar uses material classes/selectors
-content area is in narrower, centered div on large screens
-added font files used by MaterializeCSS
-new screenshot.png

updates due for version 0.2.1
Jan. 9, 2015
-spacing fixes for post meta-data (via _s) again

updates due for version 0.2.2
Jan. 9, 2015
-removal of unnecessary li tag from nav

updates due for version 0.3.0
Jan. 11, 2015
-make area below content two equal widget areas horiz. aligned on large, vert. on mobile
-take blog website live

updates due for version 0.4.0
Jan. 12, 2015
x-collapsable element to hide most blog post meta-data replacing pink bar
-non-collapsable white card-box type things have replaced the pink bars
-navbar improvements: home logo with name; optimized appearance
x-title [and subtitle?] moved to just above or below nav & nav home logo (??)
-fix: on mobile the next-previous article links at bottom of post overflow
-widgets are now properly spaced below the content

updates for version 0.5.0
Jan. 13, 2015
-left sidebar added for large screens which disappears on smaller screens
-title moved below top nav bar; home logo on right on large and small screens
-h1 and other tags now styled in a new stylesheet portagebay.css called in header.php

update for version 0.5.1
Jan. 13, 2015
-widgets tweak: each section disappears when consecutively unused starting w/bottom right then bottom left

update for version 0.5.2
Jan. 14, 2015
-eliminated 'elements' section from style.css which cleared up problems with lists showing up in widgets

update for version 0.5.3
Jan. 14, 2015
-404 update

update for version 0.5.4
Jan. 14, 2015
-fix for images staying inside containers (partial regression from 0.5.2)

update for version 0.5.5
Jan. 14, 2015
-responsive sidebar styling improvements

update for version 0.6.0
Jan. 14, 2015
-upgraded Materialize to version 0.95.0, this should fix issue with nav bar sticking

update for version 0.6.1
Jan. 14, 2015
-footer updated; blue-grey background with white grey text

update for version 0.6.2
Jan. 19, 2015
-edited MaterializeCSS file to eliminate 'select' styling due to incompatibility with WordPress widget

update for version 0.6.3
Jan. 19, 2015
-narrowed width of WordPress archives widget

update for version 0.7.0
Jan. 19, 2015
-widget styling improvements:
	-for phones the (sidebar1) widget area width is expanded to 88% from ~60% (in portagebay.css)
	-for tablets the widget area is expanded via the grid from m8 to m11 (in sidebar.php)

update for version 0.7.1
Jan. 19, 2015
-added media query in portagebay.css to narrow padding on phone view for better readability

update for version 0.7.2
Jan. 19, 2015
-styling bugfixes for comments section

update for version 0.7.3
Jan. 19, 2015
-more: styling bugfixe for comments section, input ID url max width set

update for version 0.7.4
Jan. 19, 2015
-more: fixed: styling bugfix for comments section, edited functions.php

update for version 0.7.5
Jan. 19, 2015
-narrowed left-hand sidebar in index.php and single.php & also offset content div by 1 (to keep it stationary)

update for version 0.7.6
Jan. 19, 2015
-header.php and footer.php updated with esc_url function for getting the theme directory

update for version 0.7.7
Jan. 20, 2015
-bugfixes for better clickability of sidebar elements

update for version 0.7.8
Jan. 20, 2015
-a mouseover function in materialize.js was causing turning 'click-here' symbols into arrows arbitrarily
	so it was commemnted out

update for version 0.7.9
Jan. 20, 2015
-changes in 0.7.8 killed the responsive nav bar so they are gone; materialize.min.js now used for speed
-lots of bugfix changes to markup and CSS
-putting it inside a div with class 'container' fixed the mouseover problems in the left sidebar

update for version 0.7.10
Jan. 20, 2015
-layout fix: added closing div for sidebar.php

update for version 0.7.11
Jan. 20, 2015
-layout fix: div count should be about right now for main page and single post

update for version 0.7.12
Jan. 20, 2015
-changed class of a div in sidebar.php from 'row' to 'notrow' so it doesn't interfere with left sidebar

update for version 0.7.13
Jan. 20, 2015
-another div fix and 'notrow' named back to 'row'

update for version 0.7.14
Jan. 20, 2015
-more layout bugfixes

update for version 0.7.14
Jan. 20, 2015
-more layout changes:
	should work now when user uses below left widget but not below right widget

update for version 0.8.0
Jan. 20, 2015
-code cleanup; new attempts to style widget elements; new milestone version

update for version 0.8.1
Jan. 21, 2015
-layout harmonization: index.php and single.php have more similar markup

update for version 0.8.2
Jan. 22, 2015
-added IDs to divs and put left sidebar in (and more consistent markup) search results

update for version 0.9.0
Jan. 23, 2015
-load JavaScript WP-style: used wp_register_script() and wp_enqueue_script() to load JS
-using Zepto instead of jQuery for Materialize purposes due to WP treatment of $

update for version 0.9.1
Jan. 23, 2015
-bugfix: Zepto is out, jQuery 1.11.1 is back in;
	a random plugin probably messed up my testing earlier by loading jQuery (??)

update for version 0.9.2
Jan. 23, 2015
-load CSS WP-style

update for version 0.9.3
Jan. 23, 2015
-archive pages (those displaying categories, tags, and date-based archives) now conform to post style

update for version 0.9.4
Jan. 23, 2015
-404 layout now conforms with posts (except it loads left-responsive sidebar and not 2 lower ones)

update for version 0.9.5
Jan. 25, 2015
-'allowed tags' no longer take up space in posts with comments; used CSS to make it not appear

update for version 0.9.6
Jan. 25, 2015
-screenshot update and style.css edits
-more IDs added to markup

update for version 1.0.0
Jan. 25, 2015
-FIRST RELEASE VERSION

update for version 1.0.1
March 4, 2015
-fixes in template-tags.php to keep newer posts navigation at bottom of archives pages:
should solve https://github.com/pacificpelican/portageBay/issues/4

update for version 1.0.2
April 2, 2015
-removed the following from style.css due to wordpress.org theme rules:
	'responsive, pacificpelican.us, Love Birds Consulting, Material Design'

update for version 1.0.3
April 2, 2015
-added Tags two-columns and responsive-layout
