<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Desaku</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bootstrap 3 template for corporate business" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Theme skin -->
	<link id="t-colors" href="skins/default.css" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>
<!-- <style type="text/css">
  body{
  background : url('img/bodybg/bg1.png') no-repeat scroll;
  background-size: 100% 100%;
  min-height: 700px;
  }
</style> -->
<body>



	<div id="wrapper">
		<!-- start header -->
				<!-- end header -->
		<section id="featured" class="bg">
			<!-- start slider -->





			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						
<div id="main-slider" class="main-slider flexslider">
							<ul class="slides">
																<li>
									<img src="admin/imgheader/header web 4.jpg" alt="" style="max-height: 360px; display: block; margin: auto; width: 100%; "/>
									<!-- <img src="admin/imgheader/header web 4.jpg" alt="" /> -->
									<div class="flex-caption">
										<h3>Selamat Datang</h3>
										<p>Selamat datang di hila.desa.id, semoga kami dapat memberikan informasi yang anda butuhkan.</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
																<li>
									<img src="admin/imgheader/header bambu gila.jpg" alt="" style="max-height: 360px; display: block; margin: auto; width: 100%; "/>
									<!-- <img src="admin/imgheader/header bambu gila.jpg" alt="" /> -->
									<div class="flex-caption">
										<h3>Semangat Gotong Royong</h3>
										<p>Bersama, Bangun dan Majukan Negeri</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
																<li>
									<img src="admin/imgheader/header web 2.jpg" alt="" style="max-height: 360px; display: block; margin: auto; width: 100%; "/>
									<!-- <img src="admin/imgheader/header web 2.jpg" alt="" /> -->
									<div class="flex-caption">
										<h3>UPUHATA</h3>
										<p>ULI HALAWANG</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
																<li>
									<img src="admin/imgheader/header web 3.jpg" alt="" style="max-height: 360px; display: block; margin: auto; width: 100%; "/>
									<!-- <img src="admin/imgheader/header web 3.jpg" alt="" /> -->
									<div class="flex-caption">
										<h3>SATUKAN TEKAD</h3>
										<p>Hila Bermartabat</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
																<li>
									<img src="admin/imgheader/dashboard web benteng 2.jpg" alt="" style="max-height: 360px; display: block; margin: auto; width: 100%; "/>
									<!-- <img src="admin/imgheader/dashboard web benteng 2.jpg" alt="" /> -->
									<div class="flex-caption">
										<h3>Pesona Negeri Hila</h3>
										<p>Manjakan diri dengan bersantai di Tempat Wisata Bersejarah Negeri Hila</p>
										<!-- <a href="#" class="btn btn-theme">Learn More</a> -->
									</div>
								</li>
															</ul>
							<p style="background-color: black"> <span style="color: white;"><marquee><b>Selamat Datang di Website Resmi Negeri Hila , Kecamatan Leihitu Kabupaten Maluku Tengah. Media komunikasi dan transparansi Pemerintah Negeri Hila untuk seluruh masyarakat.</b></marquee></span></p>
							
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>

		</section>

				<style>
      #map-canvas {
        width: 1000px;
        height: 530px;
      }
    </style>  
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
      
   
    <script>
    var marker;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
		function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
          addMarker(-, -, '<b>GEREJA TUA IMANUEL HILA</b>');
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Wisata</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						
							

						<article>
							<div class="post-slider">
								<div class="post-heading">
									<h3><a href="#">GEREJA TUA IMANUEL HILA</a></h3>
								</div>
								<!-- start flexslider -->
								<div id="post-slider" class="postslider flexslider">
									<ul class="slides">
										<li>
											<img src="admin/wisata/img-5390-5f7d2d318ede4818cb6f06f2.jpg" alt="" />
										</li>
										<li>
											<div class="video-container">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/0Q5Km_0kFgs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>											</div>
										</li>
																				<li>
											<img src="admin/wisata/images.jpg" alt="" />
										</li>
																														<li>
											<img src="admin/wisata/DSC08528.JPG" alt="" />
										</li>
																													</ul>
								</div>
								<!-- end flexslider -->
							</div>
							<p>
								<p>Dibangun oleh Bangsa Portugis dua tahun setelah<br />
gudang rempah/loji dibangun tepatnya pada tahun<br />
1514 dengan nama Santo Jacobus dan merupakan gereja katolik. Diambilalih oleh Belanda pada tahun 1605. Oleh Belanda gereja kayu ini kemudian diperbesar namun namanya tidak diubah. Kemudian ketika &nbsp;Bernardus &nbsp;Van Plueren &nbsp;menjadi &nbsp;Gubernur Jenderal Belanda untuk Maluku pada tahun 1780 dia mengganti namanya menjadi Imanuel serta beralih fungsi menjadi gereja protestan hingga saat ini.</p>

<p>Selain sebagai salah satu ikon wisata relegi dan sejarah di Maluku, gereja tua Imanuel ini juga merupakan &nbsp;saksi &nbsp;bisu &nbsp;bukti &nbsp;toleransi &nbsp;umat beragama &nbsp;di &nbsp;Maluku &nbsp;khususnya &nbsp;di Negeri &nbsp;Hila, pulau Ambon dan sekitarnya.</p>

<p>Setiap wisatawan yang berkunjung ke Benteng Amsterdam pasti menyempatkan diri untuk mengunjungi gereja ini&nbsp; karena lokasinya yang tepat bersebalahan dengan Benteng Amsterdam.</p>
                       
                      
							</p>
						
						</article>
												<div class="clear"></div>
						Lihat Peta
						<article>
							 <div id="map-canvas"></div>
						</article>
						
						<div class="clear"></div>
					</div>
					<div class="col-lg-4">
						<aside class="right-sidebar">
							
							
							<div class="widget">
								<h5 class="widgetheading">Tempat Wisata Lainnya</h5>
								<ul class="recent">
																		<li>
										<img src="admin/wisata/large-ddd5g6tvyaa-5sd-aa4de6839978d18f64b209824add8aa3.jpg" class="pull-left" alt="" width="20%"/>
										<h6><a href="index.php?act=d_wisata&kode=Ng==">Benteng Amsterdam</a></h6>
										<p>
											<h3 style="color:#aaaaaa; font-style:italic"><span style="font-size:20px"><strong>BENTENG&nbsp;AMSTE ...										</p>
									</li>
																		<li>
										<img src="admin/wisata/img-5390-5f7d2d318ede4818cb6f06f2.jpg" class="pull-left" alt="" width="20%"/>
										<h6><a href="index.php?act=d_wisata&kode=OA==">GEREJA TUA IMANUEL HILA</a></h6>
										<p>
											<p>Dibangun oleh Bangsa Portugis dua tahun setelah<br />
gudang rempah/loji dibangun tepatnya pada  ...										</p>
									</li>
									
									
									
								</ul>
							</div>
							
						</aside>
					</div>
				</div>
			</div>
		</section>       









</div>



		<footer>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>VISI</h4>
							<p>1. Visi<br />
<br />
&nbsp;</p>
						</div>
					</div>
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>MISI</h4>
							<p>-</p>
						</div>

					</div>
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>MOTO</h4>
							<p>3. Motto<br />
Motto Negeri Hila&nbsp;yaitu :<br />
&quot;CERIA (Cepat, Efisien dan Efektif, Ramah, Ikhlas, dan Akuntabel)&quot;.</p>
						</div>
					</div>
					
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; PMcode YD - All Right Reserved</p>
								<div class="credits">
									<!--
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                  -->
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
	<script src="plugins/flexslider/flexslider.config.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/uisearch.js"></script>
	<script src="js/jquery.cubeportfolio.min.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>


</body>

</html>