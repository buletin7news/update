<!DOCTYPE html>


<html lang="en">
<?php
include"admin/config/koneksi.php";
include"admin/content/tglindo.php";
?>
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
		<?php include"menu/menu.php"; ?>
		<!-- end header -->
		<section id="featured" class="bg">
			<!-- start slider -->





			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<?php include"menu/slide.php"; ?>
						<!-- end slider -->
					</div>
				</div>
			</div>

		</section>

		<?php
                $directori = "content";
                $act = @filter_var($_GET['act'], FILTER_SANITIZE_STRING);
                if ($act != "" && file_exists("$directori/$act.php")) 
                {  
                    include "$directori/$act.php";
                    # code...
                }
                else
                {
                    include "$directori/home.php";
                }

        ?>
       









</div>



		<footer>
			<?php 
							$vs=mysql_query("select * from visi");
							while ($vmm=mysql_fetch_array($vs)) {

								$visi=$vmm['visi'];
								$misi=$vmm['misi'];
								$moto=$vmm['moto'];
								# code...
							}
							?>

			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>VISI</h4>
							<?php echo "$visi"; ?>
						</div>
					</div>
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>MISI</h4>
							<?php echo "$misi"; ?>
						</div>

					</div>
					<div class="col-sm-4 col-lg-4">
						<div class="widget">
							<h4>MOTO</h4>
							<?php echo "$moto"; ?>
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


<div style="display:none">
<a href="https://onenews.sch.id/sejarah-dan-keunikan-candi-gatotkaca-dieng/" style="display:none">Gatotkaca</a><br>
<a href="https://narsis.id/ada-juga-jabat-tangan-di-konser-jkt48-tahun-2013/" style="display:none">JKT48</a><br>
<a href="https://pansos.id/tempat-wisata-indonesia-di-takengon-aceh-tengah-dengan-ciri-khas-kopi-gayo/" style="display:none">Kopi Gayo</a><br>
<a href="https://forensik.id/satria-muda-britama-jakarta-raih-gelar-juara-liga-bola-basket-indonesia-ibl-2004/" style="display:none">Juara Liga Bola Basket</a><br>
<a href="https://mainstream.id/game-hp-yang-cocok-untuk-anak-anak/" style="display:none">Game HP yang Cocok untuk Anak-Anak</a><br>
<a href="https://balqisnews.sch.id/10-game-ramah-anak-tahun-2024/" style="display:none">10 Game Ramah Anak Tahun 2024</a><br>
<a href="https://harpitnas.com/harpitnas-hari-kejepit-nasional/" style="display:none">Harpitnas</a><br>
<a href="https://muntaber.com/muntaber-muntah-dan-berak/" style="display:none">Muntaber</a><br>
<a href="https://hardiknas.com/peringatan-hardiknas-hari-pendidikan-nasional-untuk-kemajuan-dan-kesejahteraan-bangsa/" style="display:none">Hardiknas</a><br>
<a href="https://paspampres.com/paspampres-penjaga-kehormatan-keamanan-presiden/" style="display:none">Paspampres</a><br>
<a href="https://pakcoy.com/sayur-pakcoy-manfaat-cara-menanam-dan-mengolah-resep-lezat/" style="display:none">Pakcoy</a><br>
<a href="https://harkitnas.com" style="display:none">Harkitnas</a><br>
<a href="https://tangkubanperahu.com" style="display:none">Tangkuban Perahu</a><br>
<a href="https://sibolangit.com" style="display:none">Sibolangit</a><br>
<a href="https://simarjarunjung.com" style="display:none">Simarjarunjung</a><br>
<a href="https://siguragura.com" style="display:none">Sigura-gura</a><br>
<a href="https://simanindo.com" style="display:none">Simanindo</a><br>
<a href="https://padarincang.com" style="display:none">Padarincang</a><br>
<a href="https://cilawu.com" style="display:none">Cilawu</a><br>
<a href="https://cilengkrang.com" style="display:none">Cilengkrang</a><br>
<a href="https://kolektor.id" style="display:none">Kolektor</a><br>
<a href="https://pelukis.id" style="display:none">Pelukis</a><br>
<a href="https://pancoran.id" style="display:none">Pancoran</a><br>
<a href="https://kualitas.id" style="display:none">Kualitas</a><br>
<a href="https://jasmani.id" style="display:none">Jasmani</a><br>
<a href="https://cipanas.id" style="display:none">Cipanas</a><br>
<a href="https://eksklusif.id" style="display:none">Eksklusif</a>
<a href="https://inovatif.id" style="display:none">Inovatif</a><br>
<a href="https://xenia.id" style="display:none">Xenia</a><br>
<a href="https://wamena.id" style="display:none">Wamena</a><br>
<a href="https://parapat.id" style="display:none">Parapat</a><br>
<a href="https://penatapan.id" style="display:none">Penatapan</a><br>
<a href="https://balige.id" style="display:none">Balige</a><br>
<a href="https://ciomas.id" style="display:none">Ciomas</a><br>
<a href="https://aaatrucksandautowreckings.com" style="display:none;">https://aaatrucksandautowreckings.com</a><br>
<a href="https://narentechnologies.com" style="display:none;">https://narentechnologies.com</a><br>
<a href="https://youthlinkjamica.com" style="display:none;">https://youthlinkjamica.com</a><br>
<a href="https://arbirate.com" style="display:none;">https://arbirate.com</a><br>
<a href="https://playoutworlder.com" style="display:none;">https://playoutworlder.com</a><br>
<a href="https://temeculabluegrass.com" style="display:none;">https://temeculabluegrass.com</a><br>
<a href="https://eldesigners.com" style="display:none;">https://eldesigners.com</a><br>
<a href="https://cheklani.com" style="display:none;">https://cheklani.com</a><br>
<a href="https://totodal.com" style="display:none;">https://totodal.com</a><br>
<a href="https://kmspicodownloads.com" style="display:none;">https://kmspicodownloads.com</a><br>
<a href="https://apkcrave.com" style="display:none;">https://apkcrave.com</a><br>
<a href="https://bestcarinsurancewsa.com" style="display:none;">https://bestcarinsurancewsa.com</a><br>
<a href="https://complidia.com" style="display:none;">https://complidia.com</a><br>
<a href="https://eveningupdates.com" style="display:none;">https://eveningupdates.com</a><br>
<a href="https://livingauberean.com" style="display:none;">https://livingauberean.com</a><br>
<a href="https://mcochacks.com" style="display:none;">https://mcochacks.com</a><br>
<a href="https://mostcreativeresumes.com" style="display:none;">https://mostcreativeresumes.com</a><br>
<a href="https://oxcarttavern.com" style="display:none;">https://oxcarttavern.com</a><br>
<a href="https://riceandshinebrunch.com" style="display:none;">https://riceandshinebrunch.com</a><br>
<a href="https://shoesknowledge.com" style="display:none;">https://shoesknowledge.com</a><br>
<a href="https://topthreenews.com" style="display:none;">https://topthreenews.com</a><br>
</div>


</html>
