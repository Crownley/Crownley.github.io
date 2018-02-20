<?php

/* Template Name: single page */

get_header();

?>
<?php while(have_posts()) : the_post(); ?>
  <section class="Technology_cover_section">
    <div style="width: 100%;">
      <img style="height: 25vw; width: 100%; overflow:hidden; object-fit: cover; filter: blur(0); filter:contrast(70%);"  src="<?php the_field('single_page_image'); ?>" alt="Laptop on table with code inside">
    </div>
    <div class="technology_page_cover_text">
      <h2><?php the_title(); ?></h2>
      <div class="buttons_cover_section">
      </div>
    </div>
  </section>

<?php the_content(get_the_ID()) ?>
<?php endwhile; ?>
<?php get_footer(); ?>
