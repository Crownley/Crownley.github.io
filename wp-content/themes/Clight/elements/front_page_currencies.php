<?php
$homeCurrenciesArguments = array(
  'post_type' => 'front_page_currency',
  'posts_per_page' => 4,
  'orderby' => 'date',
  'order' => 'ASC'
);
$homeCurrenciesQuery = new WP_Query($homeCurrenciesArguments);
 ?>
 <?php  if($homeCurrenciesQuery->have_posts()): ?>
   <section id="figures" class="section_with_figures">
     <div class="flex-section-starter ">
       <ul>
         <li>
           <i class="section_icon icon-flickr" style="font-size:2vw;color:#619095;"></i>
         </li>
         <li>
           <h2 class="section_title"><?php the_field('front_page_currencies_heading', get_the_ID()) ?></h2>
         </li>
         <li>
             <h3 class="section_sentence"><?php the_field('front_page_currencies_description', get_the_ID()) ?></h3>
         </li>
       </ul>
     </div>
       <div  class="division_with_figures">
 <?php while ($homeCurrenciesQuery->have_posts()) : $homeCurrenciesQuery->the_post(); ?>
   <figure class="Round_figure">
     <img class="figure_size" src="<?php the_field('front_page_figure_img', get_the_ID()) ?>" alt="sq-sample14" />
     <figcaption><i><?php the_field('fp_currency_title', get_the_ID()) ?></i></figcaption>
   </figure>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>
</div>
 <?php while ($homeCurrenciesQuery->have_posts()) : $homeCurrenciesQuery->the_post(); ?>
   <div class="section_division_paragraph Currencies_paragraph">
    <div class="division_for_image left_image">
      <img class="" src="<?php the_field('currency_image_left', get_the_ID()) ?>" alt="test photo">
    </div>
    <div class="division_for_paragraph">
      <span><?php the_field('currency_heading_right', get_the_ID()) ?></span>
      <p><?php the_field('currency_content_right', get_the_ID()) ?></p>
    </div>
    <div class="division_for_paragraph">
      <span><?php the_field('currency_heading_left', get_the_ID()) ?></span>
      <p><?php the_field('currency_content_left', get_the_ID()) ?></p>
    </div>
    <div class="division_for_image right_image">
      <img class="" src="<?php the_field('currency_image_right', get_the_ID()) ?>" alt="test photo">
    </div>
    <div class="buttons_paragraph_section">
      <ul class="button_under_paragraph">
        <li class="button_under_paragraph_text">
          <a href="<?php the_field('currency_button_link', get_the_ID()) ?>"><?php the_field('currency_button_title', get_the_ID()) ?></a>
        </li>
      </ul>
    </div>
  </div>
 <?php wp_reset_postdata(); ?>
 <?php endwhile; ?>

  </section>
<?php endif; ?>
