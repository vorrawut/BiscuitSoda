        
        <?php zilla_content_end(); ?>
		<!-- END #content -->
		</div>

		<?php zilla_footer_before(); ?>
			
		<!-- BEGIN #footer -->
		<div id="footer">
		    
		    <!-- BEGIN .footer-inner -->
		    <div class="footer-inner">
		    
		    <?php zilla_footer_start(); ?>
		    
		        <?php get_sidebar('footer'); ?>
		
		    <?php zilla_footer_end(); ?>
		    
		    <!-- END .footer-inner -->
		    </div>
		    
		    <div class="footer-lower">
		        <div class="footer-credit">
		            <p class="copyright">All right reserved &copy; <a href="#">By BiscuitSoda</a>
		             <?php echo date( 'Y' ); ?></p>

        		</div>
		    </div>
		    
		<!-- END #footer -->
		</div>

		<a href="#" id="back-to-top"></a>
		
		<?php zilla_footer_after(); ?>
		
		
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>
			
	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!-- END body-->
</body>
<!-- END html-->
</html>