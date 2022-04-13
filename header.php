<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php get_template_part( '/parts/header-meta', 'part' ) ?>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="preloader">
        <div class="inner">
            <figure class="logo">
                <?php if ( get_theme_mod( 'main_preload_logo' ) ): ?>
                    <img src="<?php echo esc_attr(get_theme_mod( 'main_preload_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                <?php else:?>
                    <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
	            <?php endif; ?>
            </figure>
            <span class="percentage"></span>
        </div>
        <!-- end inner -->
    </div>
    <!-- end preloader -->
    <div class="transition-overlay"></div>
    <!-- end transition-overlay -->
    <?php get_template_part( '/parts/header-content', 'part' ) ?>