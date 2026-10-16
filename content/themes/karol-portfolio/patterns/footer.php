<?php
/**
 * Title: Footer
 * Slug: karol-portfolio/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package karol-portfolio
 */

?>
<!-- wp:group {"tagName":"footer","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group" style="padding-top:2rem;padding-right:1.5rem;padding-bottom:2rem;padding-left:1.5rem">
	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"textColor":"contrast"} /-->

		<!-- wp:navigation {"overlayMenu":"never","textColor":"contrast","layout":{"type":"flex"}} -->
			<!-- wp:navigation-link {"label":"Work","url":"/work","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"About","url":"/about","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"/contact","kind":"custom"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","textColor":"contrast"} -->
	<p class="has-text-align-center has-contrast-color has-text-color">&copy; Karol Liszniewski</p>
	<!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
