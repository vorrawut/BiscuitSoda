<?php


/*
Template Name: Special Layout
 */


get_header();

if(have_posts()):
	while(have_posts()) : the_post();?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

<!--info-box-->
<div class="info-box">
  <h4>Disclaimer Title</h4>
  <p>
    To better understand the planet's subsurface, scientists used a supercomputer to map 10 years of seismic waves on Earth. Researchers at ETH Zurich took this data and used the Swiss National Supercomputing Centre's (SNSC) Piz Daint high-performance computer to map all seismic waves,from earthquakes and volcanic eruptions to man-made explosions, and gain some insights, according to an SNSC release. 
  </p>
</div><!--/info-box-->


		<?php the_content(); ?>
	</article>


<?php endwhile;

else :
	echo '<p>No content found</p>';

endif;

get_footer();

?>
