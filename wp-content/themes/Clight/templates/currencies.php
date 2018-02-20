<?php

/* Template Name: currencies */

get_header();

?>

<?php while(have_posts()) : the_post(); ?>
  <section class="Technology_cover_section">
    <div style="width: 100%;">
      <img style="height: 25vw; width: 100%; overflow:hidden; object-fit: cover; filter: blur(0); filter:contrast(70%);"  src="<?php the_field('currencies_cover_image'); ?>" alt="">
    </div>
    <div class="technology_page_cover_text">
      <h2><?php the_title(); ?></h2>
      <div class="buttons_cover_section">
      </div>
    </div>
  </section>

<?php the_content(get_the_ID()) ?>
<?php endwhile; ?>


<?php
$articleArguments = array(
  'post_type' => 'currencies_page',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'ASC'
);
$articleQuery = new WP_Query($articleArguments);
 ?>
 <?php  if($articleQuery->have_posts()): ?>
   <section class="all_currencies">
   <div class="division_with_figures container_currencies">
 <?php while ($articleQuery->have_posts()) : $articleQuery->the_post(); ?>
   <a style="color: #fff;" href="<?php the_field('link_to_currency'); ?>" class="Round_figure">
     <img class="figure_size" src="<?php the_field('currency_image'); ?>" />
     <figcaption ><i><?php the_field('currency_title'); ?></i></figcaption>
   </a>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>
</div>
</section>
<?php endif; ?>





<?php get_footer(); ?>
