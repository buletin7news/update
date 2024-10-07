<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!--META START-->
    <?php 
   if(isset($oQuery)) { 
    			$datetime = "";
			$Judul = "";
			$Isi = "";
			$Sumber = "";
			$img_src = "";
			foreach($oQuery as $oRS) { 
                $datetime = $oRS->CrtTime;
                $Judul = $oRS->Judul;
                $Sumber = $oRS->Sumber;
                $Isi = $oRS->Isi;
                $Isi = str_replace(" src=\"".str_replace("www.","",base_url())," src=\"",$Isi);
                $Isi = str_replace(" src=\"".base_url()," src=\"",$Isi);
                $Isi = str_replace(" src=\""," src=\"".base_url(),$Isi);
                $Isi = str_replace(" src=\"".base_url()."http"," src=\"http",$Isi);
                $Isi = str_replace(" src=\"".base_url()."//"," src=\"//",$Isi);

				if(!is_null($oRS->GambarPath)) $img_src = $oRS->GambarPath;
				else $img_src = $AppClass->catch_first_image($oRS->Isi);
				if($img_src!="") { 
					if(strpos($img_src,"http") === false) $img_src = base_url() . $img_src;
				} 
			} ?>     
 <!-- Google / Search Engine Tags -->
   <meta itemprop="image" content="<?php echo $img_src ?>">
   <meta itemprop="name" content="<?php echo $Judul ?>">
   
   <!-- Facebook Meta Tags -->
  <meta property="og:image" content="<?php echo $img_src ?>">
  <meta property="og:title" content="<?php echo $Judul ?>">
  
   <!-- WA Meta Tags -->
 <meta property="og:image" itemprop="<?php echo $img_src ?>" />
 <?php 
    } ?>
<!--META END-->

    <title>Sekretariat DPRD Kabupaten Kendal :: Berita</title>
    
    <link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo-kendal.png"> 
    
  


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fontastic.css">
    
    <!-- Custom styles -->
    <link href="<?php echo base_url(); ?>css/half-slider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/setwan.css" rel="stylesheet">
    
  
	<style>
    #berita p { text-align:justify !important; }
    #berita .img-thumbnail { 
        max-width:480px; margin:0 14px 14px 0; float:left;
    }
    @media (max-width: 991px) {
        #berita .img-thumbnail { max-width:360px; }
    }
    @media (max-width: 767px) {
        #berita .img-thumbnail { margin:0; margin-bottom:14px; max-width:767px; }
    }
    
    
    
    #berita .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
          margin-bottom:20px;
        }
    
        
        #berita .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }
    </style>  
  
  </head>

  <body>
<?php echo $header ?>
	<div style="height:86px; background-color:#333"></div>

	<!-- Berita -->
    <section id="berita" class="home-section">
<?php 
	if(isset($oQueryList)) { ?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2>BERITA</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
<?php 
		if(count($oQueryList) > 0) {
			$i=0;
			foreach($oQueryList as $oRS) {
				$sClass = "";
				if($i==0) $sClass = " active";
				$i++;
				if(!is_null($oRS->GambarPath))
					$src = $oRS->GambarPath;
				else 
					$src = $AppClass->catch_first_image($oRS->Isi);

				if($src!="") { 
					if(strpos($src,"http") === false) $src = base_url() . $src;
					// demo purpose
					//if(strpos($src,"http") === false) $src = "https://jdih.kendalkab.go.id/" . $src;
				} 
				?>
          <div class="info col-lg-4" style="margin-bottom:30px">
            <div class="info-thumbnail"><a href="<?php echo $this->base_url_index_page; ?>berita/id/<?php echo $oRS->idx."/".$oRS->url_alias ?>"><div class="img" style="position:relative; width:100%; min-height:250px; background:url('<?php echo $src ?>') center center no-repeat #000; background-size:cover">&nbsp;</div></a></div>
            <div class="info-details">
              <div class="info-meta d-flex justify-content-between">
                <div class="date"><small><?php echo $AppClass->date_format_ina($oRS->Tanggal); ?></small></div>
                <div class="category"><a href="<?php echo $this->base_url_index_page . "berita/page/1/" . $oRS->URLAliasSumber ?>"><small><?php echo $oRS->NamaSumber ?></small></a></div>
              </div><a href="<?php echo $this->base_url_index_page; ?>berita/id/<?php echo $oRS->idx."/".$oRS->url_alias ?>">
                <h3 class="h4"><?php echo $oRS->Judul ?></h3></a>
              <p class="text-muted"><?php echo $AppClass->str_ellipsis(trim(strip_tags($oRS->Ringkasan)),150); ?></p>
            </div>
          </div>
<?php 	
			}
		} else { ?>
          <div class="col-xs-12" style="margin-bottom:30px">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center" style="color:#F00; line-height:200px; height:200px"> Belum Ada Data
              </div>
            </div>
          </div>
<?php 	
		}
//	} 

		   ?>
      	</div>
<?php 	
		$Pages = 0;
		if(isset($oQueryListCnt)) {
			if(count($oQueryListCnt) > 0) {
				$i = 0;
				foreach($oQueryListCnt as $oRS) {
					$Pages = $oRS->Pages;
				}
			}
		} 
		if($Pages>1) {  ?>
        <div class="row">
        	<div class="col-12" style="text-align:center">
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
	<?php 
            if($iPage>1) { ?>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/<?php echo $iPage-1 ?>/<?php echo $Keyword  ?>" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
    <?php 	}
			else { ?>
                <li class="page-item"><a href="#" class="page-link disabled"> <i class="fa fa-angle-left"></i></a></li>
    <?php 	}

            if($iPage>5) { ?>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/1/<?php echo $Keyword  ?>" class="page-link">1</a></li>
                <li><strong class="page-ellipsis">&hellip;</strong></li>
		<?php 	
            }
            
            if($iPage%5==0) {
                $i=(($iPage/5)-1)*5+1;
                $last = (($iPage/5)-1)*5+5;
            } else {
                $i=(intval($iPage/5))*5+1;
                $last=(intval($iPage/5))*5+5;
            }
//            $i = 1; $last = $Pages;
			while($i<=$last) {
				if($i==$iPage) { ?>
                <li class="page-item"><a href="#" class="page-link active"><?php echo $i ?></a></li>
          <?php } else { ?>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/<?php echo $i ?>/<?php echo $Keyword  ?>" class="page-link"><?php echo $i ?></a></li>
        <?php 	
		  		}
				$i++;
                if($i>$Pages) $i=$last+1;
            }
            if($i<$Pages) { ?>
                <li><strong class="page-ellipsis">&hellip;</strong></li>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/<?php echo $Pages ?>/<?php echo $Keyword  ?>" class="page-link"><?php echo $Pages ?></a></li>
	  <?php } /*elseif($i==$Pages) { ?>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/<?php echo $i ?>/<?php echo $Keyword  ?>" class="page-link"><?php echo $i ?></a></li>
	  <?php } */
			if($iPage<$Pages) { ?>
                <li class="page-item"><a href="<?php echo $base_url_class; ?>page/<?php echo $iPage+1 ?>/<?php echo $Keyword  ?>" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
        <?php } else {?>
                <li class="disabled"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
        <?php } ?>
              </ul>
            </nav>
          </div>
        </div>
<?php 	} /* end of pagination */ ?>
        </div>
      </div>
<?php 	
	} elseif(isset($oQuery)) { 
		if(count($oQuery) > 0) {
			$datetime = "";
			$Judul = "";
			$Isi = "";
			$Sumber = "";
			$img_src = "";
			foreach($oQuery as $oRS) { 
                $datetime = $oRS->CrtTime;
                $Judul = $oRS->Judul;
                $Sumber = $oRS->Sumber;
                $Isi = $oRS->Isi;
                $Isi = str_replace(" src=\"".str_replace("www.","",base_url())," src=\"",$Isi);
                $Isi = str_replace(" src=\"".base_url()," src=\"",$Isi);
                $Isi = str_replace(" src=\""," src=\"".base_url(),$Isi);
                $Isi = str_replace(" src=\"".base_url()."http"," src=\"http",$Isi);
                $Isi = str_replace(" src=\"".base_url()."//"," src=\"//",$Isi);

				if(!is_null($oRS->GambarPath)) $img_src = $oRS->GambarPath;
				else $img_src = $AppClass->catch_first_image($oRS->Isi);
				if($img_src!="") { 
					if(strpos($img_src,"http") === false) $img_src = base_url() . $img_src;
				} 
			} ?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2>BERITA</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading">
                <h4 class="h-bold"><?php echo $Judul ?></h4>
                <small><?php echo $AppClass->datefull_format_ina($oRS->Tanggal) ?></small>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
          	<!--<p><strong><?php echo $Judul ?></strong></p>-->
            <?php if($img_src!="") { ?>
      		<img class="img-responsive" style="max-width:500px; width:100%; margin:20px auto;" src="<?php echo $img_src ?>">
            <?php } echo $Isi; ?>
          </div>
          <div class="col-12" style="margin:30px 0;">
            	<div style="margin-bottom:30px; text-align:center;">
                <a href="<?php echo base_url() ?>berita" class="btn btn-transparent btn-lg">Indeks Berita</a>
                </div>
          </div>
        </div>
      </div>
<?php 
		} 
	} ?>

    </section>


<?php echo $footer ?>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBGGPsr8kgejsSwYg5Wjnz04Mrnw-fRL6Y"></script>
    <script language="javascript">
		$(document).ready(function($) {
			$(window).on("scroll", function() { setNavbarClass(); });
			function setNavbarClass() {
				if($(window).scrollTop() > 50) {
					$(".navbar").addClass("scrolled");
				} else {
					//remove the background property so it comes transparent again (defined in your css)
				   $(".navbar").removeClass("scrolled");
				}
			}
			setNavbarClass();
			
			// ---------------------------------------------- //
			// Search Bar
			// ---------------------------------------------- //
			$('.search-btn').on('click', function (e) {
				e.preventDefault();
				$('.search-area').fadeIn();
			});
			$('.search-area .close-btn').on('click', function () {
				$('.search-area').fadeOut();
			});
			
			
			// Add slideDown animation to Bootstrap dropdown when expanding.
			$('.dropdown').on('show.bs.dropdown', function() {
				$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
			});
		
		  	// Add slideUp animation to Bootstrap dropdown when collapsing.
		  	$('.dropdown').on('hide.bs.dropdown', function() {
				$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
		  	});
			
			function loadMap() {
				map = new google.maps.Map(document.getElementById("peta"), {
					center: new google.maps.LatLng(-6.9215552,110.2058814),
					zoom: 15,
					mapTypeId: 'roadmap' // roadmap, satellite, hybrid, terrain 
					// mapTypeId: google.maps.MapTypeId.SATELLITE
				});
				var lokasi=new google.maps.Marker({
					position:new google.maps.LatLng(-6.9215552,110.2058814), 
					icon: 'office.png' //, animation:google.maps.Animation.BOUNCE
				});
				var infoWindow = new google.maps.InfoWindow({
					content:"<span style='color:#0e0e0e'>Kantor Sekretariat DPRD Kabupaten Kendal</span>"
				});
				lokasi.setMap(map);
				infoWindow.open(map,lokasi);
			}
			function getBrowserVer() {
				var version = 999; 
				if (navigator.appVersion.indexOf("MSIE") != -1)
					version = parseFloat(navigator.appVersion.split("MSIE")[1]);
				return version;
			}
			function isOnline() {
				 if(getBrowserVer()<8) {
					// Handle IE and more capable browsers
					var xhr = new ( window.ActiveXObject || XMLHttpRequest )( "Microsoft.XMLHTTP" );
					var status;
					
					// Open new request as a HEAD to the root hostname with a random param to bust the cache
					xhr.open( "HEAD", "//" + window.location.hostname + "/?rand=" + Math.floor((1 + Math.random()) * 0x10000), false );
					
					// Issue request and handle response
					try {
						xhr.send();
						return ( xhr.status >= 200 && (xhr.status < 300 || xhr.status === 304) );
					} catch (error) {
						return false;
					}         
				 } else {
					return navigator.onLine;
				 }
			}
			if(isOnline()) loadMap();

		});
    </script>
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
	<style>#gpr-kominfo-widget-body{min-height:400px; overflow: auto;}</style>
  </body>

</html>
