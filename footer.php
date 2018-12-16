<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				
				
				// a continuacion añadimos el area de widgets al footer para poder mostrar widgets en el, este area esta descrit
				//en functions.php
				?>
				
				<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'footer widget', 'twentyseventeen' ); ?>">
				<?php dynamic_sidebar( 'footer-widget' ); ?>
				</aside><!-- #secondary -->
				<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'footer sidebar', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'footer-widget-2' ); ?>
</aside><!-- #secondary -->

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
