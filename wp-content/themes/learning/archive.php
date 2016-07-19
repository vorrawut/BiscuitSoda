<?php


get_header();

if(have_posts()):

  ?>

  <h2><?php

  if ( is_category()) {
    # code...
    single_cat_title();
  } elseif ( is_tag()) {
    # code...
    single_tag_title();
  } elseif ( is_author()) {
    # code...
    the_post();
    echo 'Author Archives : ' .get_the_author();
    rewind_posts();
  } elseif ( is_day()) {
    # code...
    echo "Day Archives : " .get_the_date();
  } elseif ( is_month()) {
    # code...
    echo "Month Archives : " .get_the_date('F Y');
  } elseif ( is_year()) {
    # code...
    echo "Year Archives : " .get_the_date('Y');
  } else {
    echo "Archives";
  }

  ?></h2>


  <?php while(have_posts()) : the_post();

    get_template_part('content',get_post_format());

 endwhile;

else :
  echo '<p>No content found</p>';

endif;

get_footer();

?>
