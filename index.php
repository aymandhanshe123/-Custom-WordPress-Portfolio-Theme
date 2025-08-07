<?php get_header(); ?>
<div class="content">
  <h1>Welcome to My Portfolio</h1>
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_title('<h2>', '</h2>');
        the_content();
      endwhile;
    endif;
  ?>
</div>
<?php get_footer(); ?>