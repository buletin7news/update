<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sekretariat DPRD Kabupaten Kendal</title>
    
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
  </head>

  <body>
<?php echo $header ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
<?php 
	if(isset($oQuery00)) {
		if(count($oQuery00) > 0) {
			$i=0;
			$sClass = "";
			foreach($oQuery00 as $oRS) {
				$sClass = "";
				if($i==0) $sClass = " class=\"active\"";
				?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"<?php echo $sClass ?>></li>
<?php 	
				$i++;
			}
		}
	} ?>
        </ol>
        <div class="carousel-inner" role="listbox">
<?php 
	if(isset($oQuery00)) {
		if(count($oQuery00) > 0) {
			$i=0;
			$sClass = "";
			foreach($oQuery00 as $oRS) {
				$sClass = "";
				if($i==0) $sClass = " active";
				?>
          <div class="carousel-item<?php echo $sClass ?>" style="background-image: url('<?php echo base_url().$oRS->GambarPath ?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3><?php echo $oRS->Judul ?></h3>
              <p><?php echo $oRS->Deskripsi ?></p>
            </div>
          </div>
<?php 	
				$i++;
			}
		}
	} ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

<?php 
	$Deskripsi = "";
	$GambarPath = "";
	if(isset($oQuery01)) {
		if(count($oQuery01) > 0) {
			foreach($oQuery01 as $oRS) { 
				$Deskripsi = $oRS->Isi;
				$GambarPath = $oRS->GambarPath;
			}
		}
	} ?>
    <!-- Page Content -->
    <section class="">
      <div class="container">
        <h1>Selamat Datang</h1><br />
        <?php echo $Deskripsi ?>
      </div>
    </section>

    <section class="featured-posts">
      <div class="container">
<?php   
  if(isset($oQuery02)) {
    if(count($oQuery02) > 0) {
      $i=0;
      foreach($oQuery02 as $oRS) {
        $sClass = "";
        if($i==0) $sClass = " active";
        $i++;
        if(!is_null($oRS->GambarPath))
          $src = $oRS->GambarPath;
        else 
          $src = $AppClass->catch_first_image($oRS->Isi);

        if($src!="") { 
          if(strpos($src,"http") === false) $src = base_url() . $src;
        } 
		if($i%2==1) {
        ?>
        <!-- Post-->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>"><?php echo $oRS->NamaKategori ?></a></div><a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>">
                    <h2 class="h4"><?php echo $oRS->Judul ?></h2></a>
                </header>
                <p><?php echo $oRS->Ringkasan ?></p>
                <a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>" class="btn btn-transparent">Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="image col-xs-12 col-lg-5">
              <div class="img" style="position:relative; height:100%; background:url('<?php echo $src; ?>') center center no-repeat #000; background-size:cover">&nbsp;</div>
          </div>
        </div>
<?php 	} else { ?>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
          <div class="image col-lg-5"><!--<img src="img/featured-pic-2.jpeg" alt="...">-->
              <div class="img" style="position:relative; height:100%; background:url('<?php echo $src; ?>') center center no-repeat #000; background-size:cover">&nbsp;</div>
          </div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>"><?php echo $oRS->NamaKategori ?></a></div><a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>">
                    <h2 class="h4"><?php echo $oRS->Judul ?></h2></a>
                </header>
                <p><?php echo $oRS->Ringkasan ?></p>
                <a href="<?php echo base_url() ?>profil_dprd/detail/<?php echo $oRS->idx."/".$oRS->url_alias ?>" class="btn btn-transparent">Lebih Lanjut</a>
              </div>
            </div>
          </div>
        </div>
<?php 	} 
      }
    }
  } ?>
      </div>
    </section>

    <!-- Divider Section-->
    <section style="background: url('<?php echo base_url(); ?>img/divider-bg.jpg'); background-size: cover; background-position: center bottom;" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h2>"Janganlah kita lupakan demi tujuan kita, bahwa para pemimpin berasal dari rakyat, dan bukan berada atas rakyat."<br /><small>~ Ir. Soekarno ~</small></h2><!--<a href="#" class="hero-link">View More</a>-->
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Posts -->
    <section class="latest-infos"> 
      <div class="container">
        <header> 
          <h1>Berita Terbaru</h1>
          <!--<p class="text-big">Berikut berita-berita terbaru di website Sekretariat DPRD Kabupaten Kendal.</p>-->
        </header>
        <div class="row">
<?php   
  if(isset($oQuery03)) {
    if(count($oQuery03) > 0) {
      $i=0;
      foreach($oQuery03 as $oRS) {
        $sClass = "";
        if($i==0) $sClass = " active";
        $i++;
        if(!is_null($oRS->GambarPath))
          $src = $oRS->GambarPath;
        else 
          $src = $AppClass->catch_first_image($oRS->Isi);

        if($src!="") { 
          if(strpos($src,"http") === false) $src = base_url() . $src;
        } 
        ?>
          <div class="info col-md-4">
            <div class="info-thumbnail"><a href="<?php echo $this->base_url_index_page; ?>berita/id/<?php echo $oRS->idx."/".$oRS->url_alias ?>"><div class="img" style="position:relative; width:100%; min-height:250px; background:url('<?php echo $src ?>') center center no-repeat #000; background-size:cover">&nbsp;</div></a></div>
            <div class="info-details">
              <div class="info-meta d-flex justify-content-between">
                <div class="date"><?php echo $AppClass->date_format_ina($oRS->Tanggal); //echo date("d m Y",strtotime($oRS->Tanggal)) ?></div>
                <div class="category"><a href="#">Kegiatan Pemkab</a></div>
              </div><a href="<?php echo $this->base_url_index_page; ?>berita/id/<?php echo $oRS->idx."/".$oRS->url_alias ?>">
                <h3 class="h4"><?php echo $oRS->Judul ?></h3></a>
              <p class="text-muted"><?php echo $AppClass->str_ellipsis(trim(strip_tags($oRS->Ringkasan)),150); ?></p>
            </div>
          </div>
  <?php   
      }
    }
  } ?>
        </div>
      </div>
    </section>

    <!-- Aspirasi Section-->
    <section class="newsletter py-5">    
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-7 add-comment">
            <h1>Sampaikan Aspirasi Anda</h1>
            <p class="text-big">Masyarakat Kabupaten Kendal dan sekitarnya dipersilahkan untuk menyampaikan aspirasi kepada DPRD Kabupaten Kendal secara online melalui form di bawah ini.</p>
            <form id="aspirasi-form" name="aspirasi-form" method="post" action="" style="font-size:1em">
                <input name="namaform" class="form-control" type="hidden" value="wbs">
                <div class="form-group">
                    <input name="nama" class="form-control" placeholder="Nama" required type="text">
                </div>
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                    <input name="phone" class="form-control" placeholder="Telepon" type="text">
                </div>
                <div class="form-group">
                    <textarea name="aduan" class="form-control" style="resize:none" rows="5" placeholder="Aspirasi" required></textarea>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-lg btn-secondary">Kirim</button>
                </div>
            </form>
          </div>
          <div class="col-lg-5 col-xs-12 paddingtop-60">
              <div class="widget widget_text wow fadeInDown">			
              <div class="textwidget">
                    <div id="gpr-kominfo-widget-container"></div></div>
              </div>
          </div>
          <!--<div class="col-md-8">
            <div class="form-holder">
              <form action="#">
                <div class="form-group">
                  <input type="email" name="email" id="email" placeholder="Type your email address">
                  <button type="submit" class="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>-->
        </div>
      </div>
    </section>


    <!-- Link Banner Section-->
    <section id="banner" class="bg-light">
      <div class="container pb-3">
        <!-- Post-->
        <header class="text-center pt-3 pb-4"> 
          <h1>Tautan Terkait</h1>
        </header>
        <div class="text-center">
    <?php   
      if(isset($oQuery12)) {
        if(count($oQuery12) > 0) {
          $i=0;
          foreach($oQuery12 as $oRS) {
            ?>
          <a class="banner-link" href="<?php echo $oRS->url ?>" target="_blank"><img src="<?php echo base_url().$oRS->GambarPath ?>" alt="<?php echo $oRS->JudulSingkat ?>" height="60" /></a>
      <?php   
          }
        }
      } ?>
        </div>
      </div>
    </section>

<?php echo $footer ?>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyDMabqKAAv3YIkc2NFNKgoj8RBCfrX37pk&sensor=false"></script>
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
