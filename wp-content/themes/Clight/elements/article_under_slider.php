
<?php
$contentArguments = array(
  'post_type' => 'under_slider_content',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'ASC'
);
$contentQuery = new WP_Query($contentArguments);
 ?>
 <?php  if($contentQuery->have_posts()): ?>
  <div class="section_division_paragraph">
 <?php while ($contentQuery->have_posts()) : $contentQuery->the_post(); ?>
   <div class="division_for_image left_image">
     <img class="" src="<?php the_field('under_slider_image_left', get_the_ID()) ?>" alt="test photo">
   </div>
   <div class="division_for_paragraph">
     <span><?php the_field('under_slider_heading_right', get_the_ID()) ?></span>
     <p><?php the_field('under_slider_content_right', get_the_ID()) ?></p>
   </div>
   <div class="division_for_paragraph">
     <span><?php the_field('under_slider_heading_left', get_the_ID()) ?></span>
     <p><?php the_field('under_slider_content_left', get_the_ID()) ?></p>
   </div>
   <div class="division_for_image right_image">
     <img class="" src="<?php the_field('under_slider_image_right', get_the_ID()) ?>" alt="test photo">
   </div>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>
 </div>
<?php endif; ?>
