<footer>
  <section class="footer">
    <div class="line-seperation">
      <img class="line-seperation" style="width: 100%; height:100%; overflow: hidden;" src="<?php echo ASSETS_URL . "images/line.jpg" ?>" alt="seperation line">
    </div>
    <div class="upper_footer">
      <p><?php the_field('left_footer_title', 51); ?></p>
      <div class="footer_icons">
        <ul>
          <li><a href="<?php the_field('linkedin', 51); ?>" class="icon-linkedin2 icon_recent_work" style="font-size:26px;color:white;"></a></li>
          <li><a href="<?php the_field('google_plus', 51); ?>" class="icon-google-plus icon_recent_work" style="font-size:26px;color:white;"></a></li>
          <li><a href="<?php the_field('facebook', 51); ?>" class="icon-facebook icon_recent_work" style="font-size:26px;color:white;"></a></li>
          <li><a href="<?php the_field('twitter', 51); ?>" class="icon-twitter icon_recent_work" style="font-size:26px;color:white;"></a></li>
        </ul>
      </div>
    </div>
    <div class="upper_footer">
      <p><?php the_field('right_footer_title', 51); ?></p>
      <div class="footer_right">
        <ul>
          <p>tel.: <?php the_field('phone_number', 51); ?></p>
          <p>Email: <?php the_field('email', 51); ?></p>
          <p>Address: <?php the_field('address', 51); ?></p>
        </ul>
      </div>
    </div>
    <div class="lower_footer">
      <div class="footer_contacts">
          <p style="font-size:20px"><?php the_field('copyright', 51); ?></p>
      </div>
    </div>
  </Section>
</footer>
<div class="">

</div>
</body>
</html>
