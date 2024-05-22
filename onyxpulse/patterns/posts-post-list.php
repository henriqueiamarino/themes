<?php
/**
 * Title: Post List
 * Slug: onyxpulse/posts-post-list
 * Categories: posts
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"border":{"width":"1px"}},"borderColor":"theme-3","className":"corner-only","layout":{"inherit":false}} -->
		<div class="wp-block-group corner-only has-border-color has-theme-3-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":20,"isUserOverlayColor":true,"minHeight":300,"minHeightUnit":"px","contentPosition":"bottom center","style":{"dimensions":{"aspectRatio":"16/9"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"},":hover":{"color":{"text":"var:preset|color|theme-1"}}}}},"textColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
					<div class="wp-block-group has-theme-1-color has-text-color has-link-color" style="min-height:100%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
						<!-- wp:post-date {"format":"n/j/Y","style":{"typography":{"lineHeight":"1"}}} /-->

						<!-- wp:post-title {"isLink":true,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"default","justifyContent":"left"}} -->
		<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:pattern {"slug":"onyxpulse/hidden-no-results-content"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:query-no-results -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
	<div class="wp-block-group">
		<!-- wp:template-part {"slug":"footer","tagName":"div"} /-->

		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->