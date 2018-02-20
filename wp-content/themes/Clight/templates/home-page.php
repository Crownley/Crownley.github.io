<?php

/* Template Name: home page template */

get_header();

?>

<!-- ***********MAIN************ -->
<main>
<!-- **************SECTION PAGE COVER************* -->
  <?php get_template_part('elements/homepage-cover'); ?>
<!-- ************* Begining article ************* -->
   <section class="container section_for_starting_artical">
    <div class="flex-section-starter ">
      <ul>
        <li>
          <i class="section_icon icon-flickr" style="font-size:2vw;color:#619095;"></i>
        </li>
        <li>
          <h2 class="section_title"><?php the_field('home_page_intro_heading'); ?></h2>
        </li>
        <li>
            <h3 class="section_sentence"><?php the_field('home_page_intro_description'); ?></h3>
        </li>
      </ul>
    </div>
    <?php get_template_part('elements/Article'); ?>

  </section>
  <!-- **************SECTION PAGE COVER************* -->
      <?php get_template_part('elements/homepage-slider'); ?>
      <section class="container section_for_starting_artical">
       <div class="flex-section-starter ">
         <ul>
           <li>
             <i class="section_icon icon-flickr" style="font-size:2vw;color:#619095;"></i>
           </li>
           <li>
             <h2 class="section_title"><?php the_field('under_slider_heading'); ?></h2>
           </li>
           <li>
               <h3 class="section_sentence"><?php the_field('under_slider_description'); ?></h3>
           </li>
         </ul>
       </div>
       <?php get_template_part('elements/article_under_slider'); ?>

     </section>
  <?php get_template_part('elements/front_page_currencies'); ?>
  <section class="Recent_works_section">
    <div class="flex-section-starter ">
      <ul>
        <li>
          <i class="section_icon icon-flickr" style="font-size:2vw;color:#619095;"></i>
        </li>
        <li>
          <h2 class="section_title"><?php the_field('faq_and_map_heading'); ?></h2>
        </li>
        <li>
            <h3 class="section_sentence"><?php the_field('faq_and_map_description'); ?></h3>
        </li>
      </ul>
    </div>
    <div class="Recent_works_container">
      <ul class="flex_recent_works">
        <li style="border-color:#619095" class="recent_work_item">
          <a class="recent_work_link">
          <strong style="color:#619095"><?php the_field('faq_heading'); ?></strong>
          <i class="icon-compass2 icon_recent_work" style="font-size:48px;color:#619095;"></i>
          <p><?php the_field('faq_description'); ?></p>
          </a>
        </li>
        <li style="border-color:#619095" class="recent_work_item">
          <a class="recent_work_link">
          <strong style="color:#619095"><?php the_field('map_heading'); ?></strong>
          <i class="icon-map2 icon_recent_work" style="font-size:48px;color:#619095;"></i>
          <p><?php the_field('map_description'); ?></p>
          </a>
        </li>
      </ul>
    </div>
  </section>
    <?php get_template_part('elements/faq'); ?>
  <section class="contact_us">
    <div class="map_google">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5697.662309520952!2d25.287225598950197!3d54.707536580103564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1slt!2slt!4v1515661180983" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 <!-- <?php // echo do_shortcode('[wpgmza id="1"]'); ?>   kažkodėl neveikia -->
    </div>

  </section>
</main>

<?php get_footer(); ?>
