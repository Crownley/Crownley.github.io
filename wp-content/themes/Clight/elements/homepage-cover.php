<section class="Technology_cover_section">
  <div>
    <img class="technologu_page_cover_image" src="<?php the_field('front_page_image'); ?>" alt="Laptop on table with code inside">
  </div>
  <div class="technology_page_cover_text">
    <h2><?php the_field('front_page_heading'); ?></h2>
    <div class="buttons_cover_section">
      <ul class="button_inside_technology_cover">
        <li class="button_inside_technology_cover_text">
          <a href="<?php the_field('right_link'); ?>"><?php the_field('frontpage_right_button'); ?></a>
        </li>
        <li class="button_inside_technology_cover_text">
          <a href="<?php the_field('left_link'); ?>"><?php the_field('frontpage_left_button'); ?></a>
        </li>
      </ul>
    </div>
  </div>
</section>
