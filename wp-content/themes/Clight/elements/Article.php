
<?php
$articleArguments = array(
  'post_type' => 'front_page_intro',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'ASC'
);
$articleQuery = new WP_Query($articleArguments);
 ?>
 <?php  if($articleQuery->have_posts()): ?>
  <div class="section_division_paragraph">
 <?php while ($articleQuery->have_posts()) : $articleQuery->the_post(); ?>
   <div class="division_for_image left_image">
     <img class="" src="<?php the_field('intro_article_image_left', get_the_ID()) ?>" alt="test photo">
   </div>
   <div class="division_for_paragraph">
     <span><?php the_field('intro_article_heading_right', get_the_ID()) ?></span>
     <p><?php the_field('intro_article_content_right', get_the_ID()) ?></p>
   </div>
   <div class="division_for_paragraph">
     <span><?php the_field('intro_article_heading_left', get_the_ID()) ?></span>
     <p><?php the_field('intro_article_content_left', get_the_ID()) ?></p>
   </div>
   <div class="division_for_image right_image">
     <img class="" src="<?php the_field('intro_article_image_right', get_the_ID()) ?>" alt="test photo">
   </div>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>
 </div>
<?php endif; ?>
