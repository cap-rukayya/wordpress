<?php get_header(); ?>
<main id="content">
<header class="header">
<h1 class="entry-title"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'halloween' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'halloween' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'halloween' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'halloween' ); }
?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>