<?php
if (!defined('ABSPATH')) {
	die('You are not authorized to view the page.');
}
?>

<?php get_template_part( '/parts/header-nav', 'part' ) ?>
<aside class="left-side">
	<div class="logo">
		<?php if ( get_theme_mod( 'main_side_logo' ) ): ?>
            <a href="<?=esc_url(home_url('/'))?>">
                <img src="<?php echo esc_attr(get_theme_mod( 'main_side_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
            </a>
		<?php else:?>
            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
		<?php endif; ?>
	</div>
	<ul>
		<li><a href="#">FACEBOOK</a></li>
		<li><a href="#">BEHANCE</a></li>
		<li><a href="#">DRIBBLE</a></li>
	</ul>
	<a href="#top" class="gotop">
        <img src="<?=IMAGES.'icon-gotop.svg'?>" alt="Image">
    </a>
</aside>
<!-- end left-side -->
<header class="header">
	<nav class="navbar">
		<div class="logo">
			<?php if ( get_theme_mod( 'site_logo' ) ): ?>
                <a href="<?=esc_url(home_url('/'))?>">
                    <img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                </a>
			<?php else:?>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
			<?php endif; ?>
        </div>
		<!-- end logo -->
		<div class="phone"> T: +330 294 05 11 </div>
		<!-- end phone -->
		<div class="main-menu">
			<ul>
				<li><a href="agensy.html">Agensy</a></li>
				<li><a href="cases.html">Cases</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<!-- end main-menu -->
		<div class="hamburger-menu" id="hamburger-menu">
			<div class="burger">
				<svg id="burger-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
					<title>Show / Hide Navigation</title>
					<rect class="burger-svg__base" width="50" height="50"/>
					<g class="burger-svg__bars">
						<rect class="burger-svg__bar burger-svg__bar-1" x="14" y="18" width="22" height="2"/>
						<rect class="burger-svg__bar burger-svg__bar-2" x="14" y="24" width="22" height="2"/>
						<rect class="burger-svg__bar burger-svg__bar-3" x="14" y="30" width="22" height="2"/>
					</g>
				</svg>
			</div>
			<!-- end burger -->
		</div>
		<!-- end hamburger-menu -->
	</nav>
	<!-- end navbar -->
	<div class="headlines">
		<div class="container">
			<h1>Oslo based <br>
				Digital Agency</h1>
		</div>
		<!-- end container -->
	</div>
	<!-- end headlines -->
</header>
<!-- end header -->
