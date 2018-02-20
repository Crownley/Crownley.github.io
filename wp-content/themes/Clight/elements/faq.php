

<?php
$articleArguments = array(
  'post_type' => 'frequently_asked_q',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'ASC'
);
$articleQuery = new WP_Query($articleArguments);
 ?>
 <?php  if($articleQuery->have_posts()): ?>
   <section class="accordion_section">
     <i class="section_icon icon-flickr" style="font-size:2vw;color:#619095;"></i>
     <h2 class="section_title"><?php the_field('faq_title', get_the_ID()) ?></h2>
 <?php while ($articleQuery->have_posts()) : $articleQuery->the_post(); ?>
   <button class="accordion"><?php the_field('question_faq', get_the_ID()) ?></button>
   <div class="panel">
     <p><?php the_field('answer_faq', get_the_ID()) ?></p>
   </div>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>
</section>
<?php endif; ?>
