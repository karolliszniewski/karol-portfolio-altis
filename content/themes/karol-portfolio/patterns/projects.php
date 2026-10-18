<?php
/**
 * Title: Projects
 * Slug: karol-portfolio/projects
 * Categories: query
 *
 * @package karol-portfolio
 */

?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group" style="padding-top:4rem;padding-right:1.5rem;padding-bottom:4rem;padding-left:1.5rem">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Selected work</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":1,"query":{"perPage":12,"pages":0,"offset":0,"postType":"project","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"constrained"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"textColor":"contrast","layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-excerpt {"textColor":"contrast"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"contrast"} -->
			<p class="has-text-align-center has-contrast-color has-text-color">Projects coming soon.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</section>
<!-- /wp:group -->
