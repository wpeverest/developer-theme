<?php
/**
 * Title: Front Page Header
 * Slug: wporg-developer-2023/front-page-header
 * Inserter: no
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"charcoal-2","className":"is-sticky","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-sticky has-charcoal-2-background-color has-background"><!-- wp:wporg/local-navigation-bar {"backgroundColor":"charcoal-2","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"18px","bottom":"18px"}},"position":{"type":"sticky"},"border":{"top":{"color":"var:preset|color|white-opacity-15","width":"1px"}}}} -->
<!-- wp:html -->
<div style="height:calc(var(--wp--custom--body--small--typography--line-height) * var(--wp--preset--font-size--small));" aria-hidden="true"></div>
<!-- /wp:html -->

<!-- wp:navigation {"hasIcon":false,"overlayBackgroundColor":"charcoal-2","overlayTextColor":"white","layout":{"type":"flex","orientation":"horizontal"},"fontSize":"small","menuSlug":"developer"} /-->
<!-- /wp:wporg/local-navigation-bar --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|edge-space","left":"var:preset|spacing|edge-space"}}},"backgroundColor":"charcoal-2","className":"has-white-color has-charcoal-2-background-color has-text-color has-background has-link-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-charcoal-2-background-color has-text-color has-background has-link-color" style="padding-right:var(--wp--preset--spacing--edge-space);padding-left:var(--wp--preset--spacing--edge-space)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"eb-garamond"} -->
<h1 class="wp-block-heading has-eb-garamond-font-family" style="font-size:50px;font-style:normal;font-weight:400"><?php esc_html_e( 'Developer Resources', 'wporg' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.3"}},"textColor":"white"} -->
<p class="has-white-color has-text-color" style="line-height:2.3"><?php esc_html_e( '/The freedom to build', 'wporg' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"lemon-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-lemon-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"align":"center","fontSize":"extra-small"} -->
<p class="has-text-align-center has-extra-small-font-size"><?php echo wp_kses_post(
	sprintf(
	/* translators: %1$s: version link, %2$s: version number */
		__( 'See <a href="%1$s">what has changed</a> in the WordPress %2$s API.', 'wporg' ),
		'[wordpress_version_link]',
		'[wordpress_version]'
	)
); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|edge-space","left":"var:preset|spacing|edge-space","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"bottom":{"color":"var:preset|color|light-grey-1","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--light-grey-1);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--edge-space);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--edge-space)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'wporg' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search resources', 'wporg' ); ?>","width":240,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->