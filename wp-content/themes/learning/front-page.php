<?php


get_header(); ?>

<!--site-content-->
<div class="site-content clearfix">


  <?php if(have_posts()):

    //output content however we plaese here
    while(have_posts()) : the_post();

    the_content();

  endwhile;

  else :
    // fallback no content message here
    echo '<p>No content found</p>';

  endif; ?>

  <!--home-coulumns-->
  <div class="home-columns clearfix">

    <!--one-half last-->
    <div class="one-half">
      <?php  // Opinion post loop begin here
      $opinionPosts = new WP_Query('cat=4&posts_per_page=2&orderby=ASC');

      if ($opinionPosts-> have_posts() ) :

        while ( $opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>
      <?php endwhile;

      else :
        // fallback no content message here
      endif;
      wp_reset_postdata(); ?>

    </div><!--/one-half last-->

    <!--one-half-->
    <div class="one-half last">
      <?php // new post loop begin here
      $newsPosts = new WP_Query('cat=8&posts_per_page=2&orderby=ASC');

      if ($newsPosts-> have_posts() ) :

        while ( $newsPosts->have_posts()) : $newsPosts->the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

      <?php endwhile;

      else :
        // fallback no content message here
      endif;
      wp_reset_postdata();

      ?>
    </div><!--/one-half-->


  </div><!--/home-coulumns-->


</div><!--/site-content-->

<?php get_footer();

?>
