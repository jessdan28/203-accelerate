<?php
/**
 * The template for displaying the 404 page (Not Found)
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
            
        <article id="notfound">
                <aside class="nfimage">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nfimage.jpg" class="center"/>
                </aside>
                <aside class="nftext">
                    <h2>Oopsy Daisy!</h2>
                    <p>Looks like this page no longer exists, never existed or has been moved. We feel like goofballs for leading you astray. Feel free to take a look around our <a href="http://localhost/accelerate/blog">blog</a> or some of our featured <a title="Case Studies" href="http://localhost/accelerate/case-studies">work</a>. </p>
                </aside>              
                
            </article>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>