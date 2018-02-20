<?php
$sliderArguments = array(
  'post_type' => 'slider',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'DESC'
);
$sliderQuery = new WP_Query($sliderArguments);
 ?>
 <?php  if($sliderQuery->have_posts()){ ?>
<section class="homepage_slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner text-center">
    <?php while ($sliderQuery->have_posts()) { $sliderQuery->the_post(); ?>
    <a href="<?php the_field('link_to_article', get_the_ID()) ?>" class="carousel-item <?php echo $sliderQuery->current_post == 0 ? 'active' : '';?>">
      <img class="d-block w-100" src="<?php the_field('sliders_image', get_the_ID()) ?>" alt="First slide">
      <div class="text-inside-slider">
        <h5><?php the_field('article_title_slider', get_the_ID()) ?></h5>
        <p><?php the_field('about_article_in_slider', get_the_ID()) ?></p>
      </div>
    </a>
  <?php wp_reset_postdata(); ?>
  <?php } ?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <h5 class="carousel-control-prev-icon" aria-hidden="true"></h5>
      <h5 class="sr-only">Previous</h5>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <h5 class="carousel-control-next-icon" aria-hidden="true"></h5>
      <h5 class="sr-only">Next</h5>
    </a>
  </div>
</div>
</section>
<?php } ?>
