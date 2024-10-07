
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sekretariat DPRD Kabupaten Kendal</title>
    
    <link rel="shortcut icon" href="https://dprd.kendalkab.go.id/img/logo-kendal.png"> 

    <!-- Bootstrap core CSS -->
    <link href="https://dprd.kendalkab.go.id/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://dprd.kendalkab.go.id/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="https://dprd.kendalkab.go.id/css/fontastic.css">

  	<!-- Select2 -->
  	<link rel="stylesheet" href="https://dprd.kendalkab.go.id/plugins/select2/css/select2.min.css">    
    <!-- Custom styles -->
    <link href="https://dprd.kendalkab.go.id/css/half-slider.css" rel="stylesheet">
    <link href="https://dprd.kendalkab.go.id/css/setwan.css?2037318059" rel="stylesheet">
    <style>
		.aspirasi .add-comment select {
		  background: none;
		  border: none;
		  border-bottom: 1px solid #ddd;
		  height: 60px !important;
		  border-radius: 0;
		  font-family: "Open Sans", sans-serif;
		}
		.aspirasi .add-comment select option[value=""] {
		  background: rgba(250, 250, 250, 0.3) !important;
		}
		
		.aspirasi .add-comment select option {
		  margin: 40px;
		  background: rgba(0, 0, 0, 0.3) !important;
		  color: #fff;
		  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
		}
		
		.aspirasi .add-comment input,
		.aspirasi .add-comment textarea {
		  background: none;
		  border: none;
		  border-bottom: 1px solid #ddd;
		  padding: 10px 0;
		  border-radius: 0;
		  font-family: "Open Sans", sans-serif;
		}
		
		.aspirasi .add-comment input::-moz-placeholder,
		.aspirasi .add-comment textarea::-moz-placeholder {
		  font-weight: 400;
		  font-size: 0.9em !important;
		  color: #ccc !important;
		  opacity: .8; /* Firefox */
		  font-weight: 400;
		  font-family: "Open Sans", sans-serif;
		}
		
		.aspirasi .add-comment input::-webkit-input-placeholder,
		.aspirasi .add-comment textarea::-webkit-input-placeholder {
		  font-weight: 400;
		  font-size: 0.9em !important;
		  color: #eee !important;
		  opacity: .8; /* Firefox */
		  font-weight: 400;
		  font-family: "Open Sans", sans-serif;
		}
		
		.aspirasi .add-comment input:-ms-input-placeholder,
		.aspirasi .add-comment textarea:-ms-input-placeholder {
		  font-weight: 400;
		  font-size: 0.9em !important;
		  color: #eee !important;
		  opacity: .8; /* Firefox */
		  font-weight: 400;
		  font-family: "Open Sans", sans-serif;
		}

		.aspirasi .add-comment input:focus,
		.aspirasi .add-comment textarea:focus {
		  -webkit-box-shadow: none;
		  box-shadow: none;
		  border-bottom: 1px solid #999;
		}

		.aspirasi .add-comment input,
		.aspirasi .add-comment select,
		.aspirasi .add-comment textarea {
			color:#fff;	
		}
		
		.aspirasi .add-comment textarea {
		  min-height: 100px;
		}

		.bg-gold {
			background: radial-gradient(ellipse farthest-corner at left top, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%), radial-gradient(ellipse farthest-corner at right bottom, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
		}
		.btn-gold { background:#d59e2d; color:#FFF; }
		.text-gold {
			/*background: linear-gradient(to bottom, #cfc09f 22%,#634f2c 24%, #cfc09f 26%, #cfc09f 27%,#ffecb3 40%,#3a2c0f 78%); */
			background: linear-gradient(to bottom, #cfc09f 22%,#634f2c 24%, #cfc09f 26%, #cfc09f 27%,#ffecb3 40%,#cfc09f 78%); 
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				color: #fff;
				font-weight:bold;
				/*font-family: 'Playfair Display', serif;*/
				position: relative;
				/*text-transform: uppercase;	*/
				/*font-size: 18vw;*/
				margin: 0;
				font-weight: 400;
		}
		.text-putih {
		    color : #ffffff;
		    
		
		/*-webkit-text-stroke: 3px white;*/
  /*      -webkit-text-fill-color: gold;*/
      
        
		}
		
	.aspirasi .add-comment select {
	  background: none;
	  border: none;
	  border-bottom: 1px solid #ddd;
	  padding: 10px 0 !important;
	  border-radius: 0;
	  font-family: "Open Sans", sans-serif;
	}

	.aspirasi .add-comment select:focus,
	.aspirasi .add-comment input:focus,
	.aspirasi .add-comment textarea:focus {
	  -webkit-box-shadow: none;
	  box-shadow: none;
	  border-bottom: 1px solid #eee !important;
	}
	
	.aspirasi .add-comment textarea {
	  max-height: 100px !important;
	}
		
	</style>
    
    <style>
	
	/* Input field */
	.select2-selection__rendered { 
		color:#FFF !important; font-size:1.05em; 
		padding:0 4px !important; 
		background:transparent; 
	}

	.select2-selection__arrow {
		height: 36px !important;
		width:16px !important; 
		
	}
	
	
	/* Around the search field */
	.select2-search { /*background:#F00 !important;*/ }
		
	/* Search field */
	.select2-search input { border-color:#d59e2d !important;  }
		
	/* Each result */
	.select2-results {   }
		
	/* Higlighted (hover) result */
	.select2-results__option--highlighted {
		background: #0060df !important;
	}
		
	/* Selected option */
	.select2-results__option[aria-selected=true] { background: #d59e2d !important; }

	.select2-container--open .select2-dropdown--below,
		.select2-container--open .select2-dropdown--above { 
			background: #927839; border-color: #FFF; color:#FFF; border-bottom:1px solid #FFF; 
	}
	
	.select2 .selection .select2-selection--single /*, 
	  .select2-container--default .select2-search--dropdown .select2-search__field*/ {
		border-width: 0 0 1px 0 !important;
		border-radius: 0 !important;
		height: 60px !important; padding-top:8px !important;
		border-color:#e9edf2 !important;
		
		background:transparent !important; 

	}
	
	.select2-search--dropdown .select2-search__field input { background: #fff !important; }

	.select2-container .select2-selection__placeholder { 
		  font-weight: 400;
		  font-size: 0.9em !important;
		  color: #ccc !important;
		  opacity: .8; /* Firefox */
		  font-weight: 400;
		  font-family: "Open Sans", sans-serif;
	}
	
	.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
		border-color: transparent transparent #fff transparent !important;
	}
	.select2-container--default .select2-selection--single .select2-selection__arrow b {
		border-color: #fff transparent transparent transparent !important;
	}

	.select2-selection__rendered {
	    line-height: 41px !important;
	}
	.select2-container .select2-selection--single {
		height: 45px !important;
	}
	.select2-selection__arrow {
		height: 60px !important;
	}
	
	
	</style>
</head>

<body>
 
<div class="boxed_wrapper">
<style>
  /* Custom styles for nested dropdowns */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
    display: none; /* Initially hide the submenu */
}

.dropdown-submenu:hover .dropdown-menu {
    display: block;
}
</style>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      	<div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="https://dprd.kendalkab.go.id/search" method="post">
                  <div class="form-group">
                    <input type="search" name="search" id="search" value="" placeholder="Pencarian...">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      <div class="container">
        <a class="navbar-brand" href="#"><img src="https://dprd.kendalkab.go.id/img/logo-setwan.png" height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>-->
              <li class="nav-item active"><a href="https://dprd.kendalkab.go.id/" class="nav-link">Beranda</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil DPRD</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil_dprd/detail/DPR01/jajaran_pimpinan_dewan_perwakilan_rakyat_daerah_kabupaten_kendal">Pimpinan DPRD</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil_dprd/detail/DPR03/komisi_komisi_dewan_perwakilan_rakyat_daerah_kabupaten_kendal">Komisi</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil_dprd/detail/DPR04/badan_badan_dewan_perwakilan_rakyat_daerah_kabupaten_kendal">Badan</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil_dprd/detail/DPR05/fraksi_fraksi_dewan_perwakilan_rakyat_daerah_kabupaten_kendal">Fraksi</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/anggota_dprd">Anggota DPRD</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ketua_dprd">Periode Ketua DPRD</a>
                </div>
              </li>
              <!--<li class="nav-item"><a href="https://dprd.kendalkab.go.id/sireses" class="nav-link">siReses</a></li>
              <li class="nav-item"><a href="https://dprd.kendalkab.go.id/sireses" class="nav-link">Notaku</a></li>-->
              <li class="nav-item dropdown">	
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil Setwan</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/sekretaris_dprd">Sekretaris Dari Tahun Ke Tahun</a>            
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil/detail/profil_sekretariat_dprd">Profil Sekretariat DPRD</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil/detail/visi_dan_misi">Visi dan Misi</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil/detail/struktur_organisasi">Struktur Organisasi</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/profil/detail/sumber_daya_manusia">Sumber Daya Manusia</a>
                </div>
              </li>
              <li class="nav-item dropdown">	
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aplikasi</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/sireses">Sireses</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/notaku">Notaku</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://jdih-dprd.kendalkab.go.id/" target="_blank">JDIH DPRD</a>
                </div>
              </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PPID</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- Profil PPID -->
            <div class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Profil PPID</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/tentang_kami/struktur_organisasi">Struktur Organisasi</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/tentang_kami/visi_misi_ppid">Visi dan Misi PPID</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/tentang_kami/tugas_dan_wewenang">Tugas dan Wewenang PPID</a>
              </div>
            </div>
            <!-- Jenis Informasi -->
            <div class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Jenis Informasi</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/informasi_berkala">Informasi Berkala</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/informasi_setiap_saat">Informasi Setiap Saat</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/informasi_serta_merta">Informasi Serta Merta</a>
                <!-- <a class="dropdown-item" href="#">Informasi Dikecualikan</a> -->
              </div>
            </div>

            <!-- Layanan -->
            <div class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Layanan</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/tata_cara_mendapatkan_informasi">Tata Cara Mendapatkan Informasi</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/tata_cara_pengajuan_keberatan">Tata Cara Pengajuan Keberatan</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/tata_cara_penyelesaian">Tata Cara Penyelesaian Sengketa</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/aduan">Aduan</a>
                <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/saluran_interaktif">Saluran Interaktif</a>

              </div>
            </div>


            <!-- PPID Pelaksana -->
            <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/ppid_pelaksana">PPID Pelaksana</a>

            <!-- Regulasi -->
            <a class="dropdown-item" href="https://dprd.kendalkab.go.id/ppid/layanan/regulasi">Regulasi</a>
          </div>
        </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/produk_hukum">Produk Hukum</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/berita">Berita</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/agenda">Agenda</a>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/kegiatan">Kegiatan</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/suara_mas">Suara Mas</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/galeri/foto">Foto</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="https://dprd.kendalkab.go.id/galeri/video">Video</a>
                </div>
              </li>
              <li class="nav-item"><a href="https://dprd.kendalkab.go.id/kontak" class="nav-link">Kontak</a></li>
              <li class="nav-item hidden-md-down"><a class="nav-link">|</a></li>
          </ul>
          <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
        </div>
      </div>
    </nav>
<script>
    	// Enable nested dropdowns on hover
    	document.addEventListener("DOMContentLoaded", function() {
    		var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

    		dropdownSubmenus.forEach(function(submenu) {
    			submenu.addEventListener('mouseover', function() {
    				var dropdownMenu = this.querySelector('.dropdown-menu');
    				if (dropdownMenu) {
    					dropdownMenu.classList.add('show');
    				}
    			});

    			submenu.addEventListener('mouseout', function() {
    				var dropdownMenu = this.querySelector('.dropdown-menu');
    				if (dropdownMenu) {
    					dropdownMenu.classList.remove('show');
    				}
    			});
    		});
    	});
    </script>  
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('https://dprd.kendalkab.go.id/uploads/mainslide/20240909001.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Pimpinan dan Anggota DPRD Kabupaten Kendal 2024-2029</h3>
              <p>Pimpinan dan Anggota DPRD Kabupaten Kendal Masa Keanggotaan 2024-2029</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('https://dprd.kendalkab.go.id/uploads/mainslide/20240909002.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Pengucapan Sumpah atau Janji Anggota DPRD Kabupaten Kendal Masa Keanggotaan 2024-2029</h3>
              <p>Pengucapan Sumpah atau Janji Anggota DPRD Kabupaten Kendal Masa Keanggotaan 2024-2029</p>
            </div>
          </div>
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

    <!-- Page Content -->
    <!-- Aspirasi Section-->
    <section class="aspirasi py-0 bg-gold">    
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-7 add-comment" style="margin-bottom:50px">
            <h1 class="text-putih">Suara Mas</h1><br>
            <p class="text-big text-white">Masyarakat Kabupaten Kendal dan sekitarnya dipersilahkan untuk menyampaikan aspirasi kepada DPRD Kabupaten Kendal secara online melalui form di bawah ini.</p>
            <form id="main-opini-form" name="aspirasi-form" method="post" action="" style="font-size:1em">
                <input name="namaform" class="form-control" type="hidden" value="opini">
                <div class="form-group">
                    <input name="nama" class="form-control" placeholder="Nama (Wajib Diisi)*" required type="text">
                </div>
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                    <input name="phone" class="form-control" placeholder="Telepon (Wajib Diisi)*" required type="text">
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="kecamatan" class="form-control select2" data-placeholder="Kecamatan (Wajib Diisi)*" required>
                        <option></option>
                                                <option value="33.24.01">Plantungan</option>
                                                <option value="33.24.02">Pageruyung</option>
                                                <option value="33.24.03">Sukorejo</option>
                                                <option value="33.24.04">Patean</option>
                                                <option value="33.24.05">Singorojo</option>
                                                <option value="33.24.06">Limbangan</option>
                                                <option value="33.24.07">Boja</option>
                                                <option value="33.24.08">Kaliwungu</option>
                                                <option value="33.24.09">Brangsong</option>
                                                <option value="33.24.10">Pegandon</option>
                                                <option value="33.24.11">Gemuh</option>
                                                <option value="33.24.12">Weleri</option>
                                                <option value="33.24.13">Cepiring</option>
                                                <option value="33.24.14">Patebon</option>
                                                <option value="33.24.15">Kendal</option>
                                                <option value="33.24.16">Rowosari</option>
                                                <option value="33.24.17">Kangkung</option>
                                                <option value="33.24.18">Ringinarum</option>
                                                <option value="33.24.19">Ngampel</option>
                                                <option value="33.24.20">Kaliwungu Selatan</option>
                                              </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select name="desa" class="form-control select2" data-placeholder="Desa/Kelurahan (Wajib Diisi)*" required>
                        <option></option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.01">
                          Desa Bendosari                        </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.02">
                          Desa Blumah                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.03">
                          Desa Jati                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.04">
                          Desa Jurangagung                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.05">
                          Desa Karanganyar                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.06">
                          Desa Kediten                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.07">
                          Desa Manggungmangu                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.08">
                          Desa Mojoagung                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.09">
                          Desa Tirtomulyo                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.10">
                          Desa Tlogopayung                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.11">
                          Desa Wadas                         </option>
                                                <option data-kecamatan="33.24.01" value="33.24.01.12">
                          Desa Wonodadi                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.01">
                          Desa Bangunsari                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.02">
                          Desa Gebangan                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.03">
                          Desa Getas Blawong                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.04">
                          Desa Gondoharum                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.05">
                          Desa Kebongembong                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.06">
                          Desa Krikil                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.07">
                          Desa Pagergunung                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.08">
                          Desa Pageruyung                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.09">
                          Desa Parakan Sebaran                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.10">
                          Desa Petung                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.11">
                          Desa Pucakwangi                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.12">
                          Desa Surokonto Kulon                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.13">
                          Desa Surokonto Wetan                         </option>
                                                <option data-kecamatan="33.24.02" value="33.24.02.14">
                          Desa Tambahrejo                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.01">
                          Desa Bringinsari                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.02">
                          Desa Damarjati                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.03">
                          Desa Genting Gunung                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.04">
                          Desa Harjodowo                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.05">
                          Desa Kalibogor                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.06">
                          Desa Kalipakis                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.07">
                          Desa Kebumen                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.08">
                          Desa Mulyosari                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.09">
                          Desa Ngadiwarno                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.10">
                          Desa Ngargosari                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.11">
                          Desa Peron                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.12">
                          Desa Pesaren                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.13">
                          Desa Purwo Sari                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.14">
                          Desa Selokaton                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.15">
                          Desa Sukorejo                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.16">
                          Desa Taman Rejo                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.17">
                          Desa Tamping Winarno                         </option>
                                                <option data-kecamatan="33.24.03" value="33.24.03.18">
                          Desa Trimulyo                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.01">
                          Desa Curugsewu                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.02">
                          Desa Gedong                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.03">
                          Desa Kalibareng                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.04">
                          Desa Kalices                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.05">
                          Desa Kalilumpang                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.06">
                          Desa Mlatiharjo                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.07">
                          Desa Pagersari                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.08">
                          Desa Pakisan                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.09">
                          Desa Plososari                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.10">
                          Desa Selo                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.11">
                          Desa Sidodadi                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.12">
                          Desa Sidokumpul                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.13">
                          Desa Sukomangli                         </option>
                                                <option data-kecamatan="33.24.04" value="33.24.04.14">
                          Desa Wirosari                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.01">
                          Desa Banyuringin                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.02">
                          Desa Cacaban                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.03">
                          Desa Cening                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.04">
                          Desa Getas                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.05">
                          Desa Kaliputih                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.06">
                          Desa Kalirejo                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.07">
                          Desa Kedungsari                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.08">
                          Desa Kertosari                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.09">
                          Desa Merbuh                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.10">
                          Desa Ngareanak                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.11">
                          Desa Singorojo                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.12">
                          Desa Sukodadi                         </option>
                                                <option data-kecamatan="33.24.05" value="33.24.05.13">
                          Desa Trayu                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.01">
                          Desa Gondang                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.02">
                          Desa Gonoharjo                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.03">
                          Desa Jawisari                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.04">
                          Desa Kedungboto                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.05">
                          Desa Limbangan                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.06">
                          Desa Margosari                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.07">
                          Desa Ngesrepbalong                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.08">
                          Desa Pagertoyo                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.09">
                          Desa Pagerwojo                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.10">
                          Desa Pakis                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.11">
                          Desa Peron                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.12">
                          Desa Sriwulan                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.13">
                          Desa Sumber Rahayu                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.14">
                          Desa Tabet                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.15">
                          Desa Tamanrejo                         </option>
                                                <option data-kecamatan="33.24.06" value="33.24.06.16">
                          Desa Tambahsari                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.01">
                          Desa Banjarejo                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.02">
                          Desa Bebengan                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.03">
                          Desa Blimbing                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.04">
                          Desa Boja                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.05">
                          Desa Campurejo                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.06">
                          Desa Kaligading                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.07">
                          Desa Karangmanggis                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.08">
                          Desa Kliris                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.09">
                          Desa Leban                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.10">
                          Desa Medono                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.11">
                          Desa Metesih                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.12">
                          Desa Ngabean                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.13">
                          Desa Pasigitan                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.14">
                          Desa Puguh                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.15">
                          Desa Purwogondo                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.16">
                          Desa Salamsari                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.17">
                          Desa Tampingan                         </option>
                                                <option data-kecamatan="33.24.07" value="33.24.07.18">
                          Desa Trisobo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.01">
                          Desa Karangtengah                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.02">
                          Desa Krajankulon                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.03">
                          Desa Kumpulrejo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.04">
                          Desa Kutoharjo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.05">
                          Desa Mororejo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.06">
                          Desa Nolokerto                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.07">
                          Desa Sarirejo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.08">
                          Desa Sumberejo                         </option>
                                                <option data-kecamatan="33.24.08" value="33.24.08.09">
                          Desa Wonorejo                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.01">
                          Desa Blorok                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.02">
                          Desa Brangsong                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.03">
                          Desa Kebon Adem                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.04">
                          Desa Kertomulyo                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.05">
                          Desa Penjalin                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.06">
                          Desa Purwokerto                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.07">
                          Desa Rejosari                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.08">
                          Desa Sidorejo                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.09">
                          Desa Sumur                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.10">
                          Desa Tosari                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.11">
                          Desa Tunggulsari                         </option>
                                                <option data-kecamatan="33.24.09" value="33.24.09.12">
                          Desa Turunrejo                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.01">
                          Desa Dawungsari                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.02">
                          Desa Gubugsari                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.03">
                          Desa Karangmulyo                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.04">
                          Desa Margomulyo                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.05">
                          Desa Pegandon                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.06">
                          Desa Pekuncen                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.07">
                          Desa Penanggulan                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.08">
                          Desa Pesawahan                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.09">
                          Desa Pucang Rejo                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.10">
                          Desa Puguh                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.11">
                          Desa Tegorejo                         </option>
                                                <option data-kecamatan="33.24.10" value="33.24.10.12">
                          Desa Wonosari                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.01">
                          Desa Cepokomulyo                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.02">
                          Desa Galih                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.03">
                          Desa Gebang                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.04">
                          Desa Gemuhblanten                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.05">
                          Desa Jenarsari                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.06">
                          Desa Johorejo                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.07">
                          Desa Krompaan                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.08">
                          Desa Lumansari                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.09">
                          Desa Pamriyan                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.10">
                          Desa Poncorejo                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.11">
                          Desa Pucangrejo                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.12">
                          Desa Sedayu                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.13">
                          Desa Sojomerto                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.14">
                          Desa Tamangede                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.15">
                          Desa Tlahab                         </option>
                                                <option data-kecamatan="33.24.11" value="33.24.11.16">
                          Desa Triharjo                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.01">
                          Desa Bumiayu                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.02">
                          Desa Karanganom                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.03">
                          Desa Karangdowo                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.04">
                          Desa Manggungsari                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.05">
                          Desa Montongsari                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.06">
                          Desa Nawangsari                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.07">
                          Desa Ngasinan                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.08">
                          Desa Payung                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.09">
                          Desa Penaruban                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.10">
                          Desa Penyangkringan                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.11">
                          Desa Pucuksari                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.12">
                          Desa Sambongsari                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.13">
                          Desa Sidomukti                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.14">
                          Desa Sumberagung                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.15">
                          Desa Tratemulyo                         </option>
                                                <option data-kecamatan="33.24.12" value="33.24.12.16">
                          Desa Weleri                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.01">
                          Desa Botomulyo                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.02">
                          Desa Cepiring                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.03">
                          Desa Damarsari                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.04">
                          Desa Gondang                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.05">
                          Desa Juwiring                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.06">
                          Desa Kaliayu                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.07">
                          Desa Kalirandu Gede                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.08">
                          Desa Karangayu                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.09">
                          Desa Karangsuno                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.10">
                          Desa Korowelang Anyar                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.11">
                          Desa Korowelang Kulon                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.12">
                          Desa Margorejo                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.13">
                          Desa Pandes                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.14">
                          Desa Podosari                         </option>
                                                <option data-kecamatan="33.24.13" value="33.24.13.15">
                          Desa Sidomulyo                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.01">
                          Desa Bangunrejo                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.02">
                          Desa Bangunsari                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.03">
                          Desa Bulugede                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.04">
                          Desa Donosari                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.05">
                          Desa Jambearum                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.06">
                          Desa Kartikajaya                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.07">
                          Desa Kebonharjo                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.08">
                          Desa Kumpulrejo                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.09">
                          Desa Lanji                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.10">
                          Desa Magersari                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.11">
                          Desa Margosari                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.12">
                          Desa Pidodo Kulon                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.13">
                          Desa Pidodo Wetan                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.14">
                          Desa Purwokerto                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.15">
                          Desa Purwosari                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.16">
                          Desa Sukolilan                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.17">
                          Desa Tambakrejo                         </option>
                                                <option data-kecamatan="33.24.14" value="33.24.14.18">
                          Desa Wonosari                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.01">
                          Kel. Ngilir                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.02">
                          Kel. Patukangan                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.03">
                          Kel. Balok                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.04">
                          Kel. Bandengan                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.05">
                          Kel. Pegulon                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.06">
                          Kel. Bugangin                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.07">
                          Kel. Langenharjo                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.08">
                          Kel. Jetis                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.09">
                          Kel. Sijeruk                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.10">
                          Kel. Jotang                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.11">
                          Kel. Tunggulrejo                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.12">
                          Kel. Candiroto                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.13">
                          Kel. Sukodono                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.14">
                          Kel. Trompo                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.15">
                          Kel. Kalibuntu Wetan                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.16">
                          Kel. Kebondalem                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.17">
                          Kel. Banyutowo                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.18">
                          Kel. Karang Sari                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.19">
                          Kel. Ketapang                         </option>
                                                <option data-kecamatan="33.24.15" value="33.24.15.20">
                          Kel. Pekauman                        </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.01">
                          Desa Karangsari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.02">
                          Desa Bulak                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.03">
                          Desa Gebanganom                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.04">
                          Desa Gempolsewu                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.05">
                          Desa Jatipurwo                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.06">
                          Desa Kebonsari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.07">
                          Desa Parakan                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.08">
                          Desa Pojoksari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.09">
                          Desa Randusari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.10">
                          Desa Rowosari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.11">
                          Desa Sendang Sikucing                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.12">
                          Desa Sendangdawuhan                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.13">
                          Desa Tambaksari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.14">
                          Desa Tanjunganom                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.15">
                          Desa Tanjungsari                         </option>
                                                <option data-kecamatan="33.24.16" value="33.24.16.16">
                          Desa Wonotenggang                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.01">
                          Desa Gebanganom Wetan                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.02">
                          Desa Jungsemi                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.03">
                          Desa Kadilangu                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.04">
                          Desa Kalirejo                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.05">
                          Desa Kaliyoso                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.06">
                          Desa Kangkung                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.07">
                          Desa Karangmalang Wetan                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.08">
                          Desa Laban                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.09">
                          Desa Lebosari                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.10">
                          Desa Rejosari                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.11">
                          Desa Sendangdawung                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.12">
                          Desa Sendangkulon                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.13">
                          Desa Sukodadi                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.14">
                          Desa Tanjungmojo                         </option>
                                                <option data-kecamatan="33.24.17" value="33.24.17.15">
                          Desa Truko                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.01">
                          Desa Caruban                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.02">
                          Desa Kedungasri                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.03">
                          Desa Kedunggading                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.04">
                          Desa Mojo                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.05">
                          Desa Ngawensari                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.06">
                          Desa Ngerjo                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.07">
                          Desa Pagerdawung                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.08">
                          Desa Purworejo                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.09">
                          Desa Ringinarum                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.10">
                          Desa Rowobranten                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.11">
                          Desa Tejorejo                         </option>
                                                <option data-kecamatan="33.24.18" value="33.24.18.12">
                          Desa Wungurejo                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.01">
                          Desa Banyuurip                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.02">
                          Desa Bojonggede                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.03">
                          Desa Dempelrejo                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.04">
                          Desa Jatirejo                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.05">
                          Desa Kebonagung                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.06">
                          Desa Ngampel Kulon                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.07">
                          Desa Ngampel Wetan                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.08">
                          Desa Putatgede                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.09">
                          Desa Rejosari                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.10">
                          Desa Sudipayung                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.11">
                          Desa Sumbersari                         </option>
                                                <option data-kecamatan="33.24.19" value="33.24.19.12">
                          Desa Winong                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.01">
                          Desa Darupono                        </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.02">
                          Desa Kedungsuren                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.03">
                          Desa Magelung                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.04">
                          Desa Plantaran                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.05">
                          Desa Protomulyo                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.06">
                          Desa Sukomulyo                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.07">
                          Desa Jerukgiling                         </option>
                                                <option data-kecamatan="33.24.20" value="33.24.20.08">
                          Desa Sidomakmur                        </option>
                                              </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <textarea name="opini" class="form-control" style="resize:none" placeholder="Aspirasi (Wajib Diisi)*" required></textarea>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-light">Kirim</button>
                    <a href="https://dprd.kendalkab.go.id/suara_mas" class="btn btn-light mb-20">Lihat Aspirasi</a>
                </div>
            </form>
          </div>
          <div class="col-lg-5 col-xs-12 paddingtop-60">
          	<div class="align-items-center" style="background-color:#000; background:url('https://dprd.kendalkab.go.id/img/header_ereses.jpg'); width:100%; min-height:100px; height:100%; text-align:center; padding-top:5px"> <a href="https://dprd.kendalkab.go.id/e_reses"><img src="https://dprd.kendalkab.go.id/img/logo-ereses.png" width="200"></a>
              <div style="margin-left: 20px; margin-right: 20px; margin-bottom: 20px !important ">
                <span></span>
              <p class="text-big text-white text-justify"><a class="btn btn-gold">siReses</a> merupakan aplikasi berbasis web yang dapat digunakan masyarakat untuk menyampaikan usulannya pada kegiatan reses DPRD sesuai dengan daerah pemilihan (DaPil) Masing-masing. Selain itu kegunaan <a class="btn btn-gold">siReses</a> sendiri dapat memberikan akses kepada masyarakat yang tidak dapat hadir pada saat kegiatan reses berlangsung untuk tetap dapat menyampaikan usulannya melalui platform <a class="btn btn-gold">siReses</a> sehingga dapat mempermudah masyarakat dalam memberikan aspirasi kepada anggota DPRD. Platform ini harapannya tidak hanya digunakan untuk memberikan usulan secara online, tapi juga mengetahui agenda serta laporan reses</p>
             <a href="https://dprd.kendalkab.go.id/sireses" class="btn btn-light mb-20">Lihat siReses</a>
             </div>
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

    <section class="d-none">
      <div class="container">
        <h1>Selamat Datang</h1><br />
        <p class="text-big">Selamat datang di Website Dewan Perwakilan Daerah Kabupaten Kendal. Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran Dewan Perwakilan Daerah Kabupaten Kendal dalam melaksanakan tugasnya.</p>
<p class="text-big">Kehadiran Website ini dapat membuka ruang interaksi (akses) yang lebih luas dan berkesinambungan, dalam kerangka membangun kompentensi pengabdian kepada masyarakat, baik proposional, professional dan prosedural..</p>      </div>
    </section>

    <section class="featured-posts">
      <div class="container">
        <header> 
          <h1>Berita Terbaru</h1><br />
          <!--<p class="text-big">Berikut berita-berita terbaru di website Sekretariat DPRD Kabupaten Kendal.</p>-->
        </header>
         <!-- Post-->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><small>16 Agustus 2024</small> <a href="https://dprd.kendalkab.go.id/berita/id/20240911002/mendengarkan_pidato_kenegaraan_presiden_ri_dalam_memperingati_hut_ri_ke_79_kemerdekaan_ri">&laquo; Mendengarkan Pidato Kenegaraan Presiden RI Dalam Memperingati Hut RI Ke-79 Kemerdekaan RI &raquo;</a></div><a href="https://dprd.kendalkab.go.id/berita/id/20240911002/mendengarkan_pidato_kenegaraan_presiden_ri_dalam_memperingati_hut_ri_ke_79_kemerdekaan_ri">
                    <h2 class="h4">Mendengarkan Pidato Kenegaraan Presiden RI Dalam Memperingati Hut RI Ke-79 Kemerdekaan RI</h2></a>
                </header>
                <p>DPRD Kabupaten Kendal menggelar Rapat Paripurna Istimewa dalam rangka mendengarkan pidato kenegaraan Presiden Republik Indonesia tahun 2024, di Gedung DPRD Kabupaten Kendal. Jumat 16 Agustus 2024. </p>
                <a href="https://dprd.kendalkab.go.id/berita/id/20240911002/mendengarkan_pidato_kenegaraan_presiden_ri_dalam_memperingati_hut_ri_ke_79_kemerdekaan_ri" class="btn btn-transparent">Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="image col-xs-12 col-lg-5">
              <div class="img" style="position:relative; height:100%; background:url('https://dprd.kendalkab.go.id/uploads/konten/berita/20240911002.jpg') center center no-repeat #000; background-size:cover">&nbsp;</div>
          </div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
          <div class="image col-lg-5">
              <div class="img" style="position:relative; height:100%; background:url('https://dprd.kendalkab.go.id/uploads/konten/berita/20240911001.jpg') center center no-repeat #000; background-size:cover">&nbsp;</div>
          </div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><small>14 Agustus 2024</small> <a href="https://dprd.kendalkab.go.id/berita/id/20240911001/50_anggota_dprd_kabupaten_kendal_resmi_dilantik">&laquo; 50 Anggota DPRD Kabupaten Kendal Resmi Dilantik &raquo;</a></div><a href="https://dprd.kendalkab.go.id/berita/id/20240911001/50_anggota_dprd_kabupaten_kendal_resmi_dilantik">
                    <h2 class="h4">50 Anggota DPRD Kabupaten Kendal Resmi Dilantik</h2></a>
                </header>
                <p>Sebanyak 50 anggota Dewan Perwakilan Rakyat Daerah (DPRD) Kabupaten Kendal masa keanggotaan 2024 %u2013 2029, resmi di lantik di Ruang Rapat Paripurna DPRD Kendal pada Rabu (14/8/2024). </p>
                <a href="https://dprd.kendalkab.go.id/berita/id/20240911001/50_anggota_dprd_kabupaten_kendal_resmi_dilantik" class="btn btn-transparent">Lebih Lanjut</a>
              </div>
            </div>
          </div>
        </div>
         <!-- Post-->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><small>27 Juli 2024</small> <a href="https://dprd.kendalkab.go.id/berita/id/20240911003/rapat_paripurna_istimewa_dprd_kab_kendal_dalam_rangka_hari_jadi_kabupaten_kendal_ke_419">&laquo; Rapat Paripurna Istimewa DPRD Kab. Kendal dalam rangka Hari Jadi Kabupaten Kendal ke-419. &raquo;</a></div><a href="https://dprd.kendalkab.go.id/berita/id/20240911003/rapat_paripurna_istimewa_dprd_kab_kendal_dalam_rangka_hari_jadi_kabupaten_kendal_ke_419">
                    <h2 class="h4">Rapat Paripurna Istimewa DPRD Kab. Kendal dalam rangka Hari Jadi Kabupaten Kendal ke-419.</h2></a>
                </header>
                <p>DPRD Kabupaten Kendal menggelar Rapat Paripurna Istimewa dalam rangka Peringatan Hari Jadi Kabupaten Kendal ke-419, Sabtu 27 Juli 2024.
Acara Rapat Paripurna Istimewa hari ini merupakan salah satu kegiatan dari rangkaian peringatan Hari Jadi Kabupaten Kendal yang ke 419 yang akan diperingati bersama besok pada hari Minggu tanggal 28 Juli 2024.</p>
                <a href="https://dprd.kendalkab.go.id/berita/id/20240911003/rapat_paripurna_istimewa_dprd_kab_kendal_dalam_rangka_hari_jadi_kabupaten_kendal_ke_419" class="btn btn-transparent">Lebih Lanjut</a>
              </div>
            </div>
          </div>
          <div class="image col-xs-12 col-lg-5">
              <div class="img" style="position:relative; height:100%; background:url('https://dprd.kendalkab.go.id/uploads/konten/berita/20240911003.jpg') center center no-repeat #000; background-size:cover">&nbsp;</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider Section-->
    <section style="background: url('https://dprd.kendalkab.go.id/img/divider-bg.jpg'); background-size: cover; background-position: center bottom;" class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <!--<h2>"Janganlah kita lupakan demi tujuan kita, bahwa para pemimpin berasal dari rakyat, dan bukan berada atas rakyat."<br /><small>~ Ir. Soekarno ~</small></h2><a href="#" class="hero-link">View More</a>-->
            <div id="carouselQuote" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <h2>"Janganlah kita lupakan demi tujuan kita, bahwa para pemimpin berasal dari rakyat, dan bukan berada atas rakyat."<br /><small>~ Ir. Soekarno ~</small></h2>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Posts -->
    <section class="latest-infos" style="display:none"> 
      <div class="container">
        <header> 
          <h1>Kegiatan Terbaru</h1>
          <!--<p class="text-big">Berikut berita-berita terbaru di website Sekretariat DPRD Kabupaten Kendal.</p>-->
        </header>
        <div class="row">
          <div class="info col-lg-4" style="margin-bottom:30px">
            <div class="info-thumbnail"><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200210003/ketua_dprd_kendal_dorong_perencanaan_pembangunan_desa_dipersiapkan_matang"><div class="img" style="position:relative; width:100%; min-height:250px; background:url('https://dprd.kendalkab.go.id/uploads/konten/kegiatan_dprd/20200210003.jpeg') center center no-repeat #000; background-size:cover">&nbsp;</div></a></div>
            <div class="info-details">
              <div class="info-meta d-flex justify-content-between">
                <div class="date"><small>06 Februari 2020</small></div>
                <div class="category"><a href="https://dprd.kendalkab.go.id/anggota_dprd/id/2019202433241111111111118/muhammad_makmun"><small>MUHAMMAD MAKMUN</small></a></div>
              </div><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200210003/ketua_dprd_kendal_dorong_perencanaan_pembangunan_desa_dipersiapkan_matang">
                <h3 class="h4">Ketua DPRD Kendal Dorong Perencanaan Pembangunan Desa Dipersiapkan Matang</h3></a>
              <p class="text-muted">KENDAL %u2013 Ketua DPRD Kendal H Muhammad Makmun, SHI, mengharapkan perencanaan pembangunan desa disiapkan secara matang agar potensi desa dapat...</p>
            </div>
          </div>
            <div class="info col-lg-4" style="margin-bottom:30px">
            <div class="info-thumbnail"><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200204002/komisi_d_dprd_kendal_sidak_kesiapan_rsud_antisipasi_virus_corona"><div class="img" style="position:relative; width:100%; min-height:250px; background:url('https://dprd.kendalkab.go.id/uploads/konten/kegiatan_dprd/20200204002.jpg') center center no-repeat #000; background-size:cover">&nbsp;</div></a></div>
            <div class="info-details">
              <div class="info-meta d-flex justify-content-between">
                <div class="date"><small>31 Januari 2020</small></div>
                <div class="category"><a href="https://dprd.kendalkab.go.id/anggota_dprd/id/201920243324080803840003/mahfud_sodiq"><small>MAHFUD SODIQ</small></a></div>
              </div><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200204002/komisi_d_dprd_kendal_sidak_kesiapan_rsud_antisipasi_virus_corona">
                <h3 class="h4">Komisi D DPRD Kendal Sidak Kesiapan RSUD Antisipasi Virus Corona</h3></a>
              <p class="text-muted">Komisi D DPRD Kabupaten Kendal melakukan inspeksi mendadak (sidak) ke RSUD dr Soewondo Kendal, Jumat (31/1). Ketua Komisi D Bapak Mahfud Sodiq...</p>
            </div>
          </div>
            <div class="info col-lg-4" style="margin-bottom:30px">
            <div class="info-thumbnail"><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200109006/risalatul_muawanah_dan_istighosah_al_karomah_majelis_komando_merah_putih"><div class="img" style="position:relative; width:100%; min-height:250px; background:url('https://dprd.kendalkab.go.id/uploads/konten/kegiatan_dprd/20200109006.jpg') center center no-repeat #000; background-size:cover">&nbsp;</div></a></div>
            <div class="info-details">
              <div class="info-meta d-flex justify-content-between">
                <div class="date"><small>08 Desember 2019</small></div>
                <div class="category"><a href="https://dprd.kendalkab.go.id/anggota_dprd/id/201920243324100308970001/dian_alfat_muchammad"><small>DIAN ALFAT MUCHAMMAD</small></a></div>
              </div><a href="https://dprd.kendalkab.go.id/kegiatan/id/20200109006/risalatul_muawanah_dan_istighosah_al_karomah_majelis_komando_merah_putih">
                <h3 class="h4">Risalatul Muawanah dan Istighosah Al Karomah Majelis Komando Merah Putih</h3></a>
              <p class="text-muted">Ketua Komisi B DPRD Kendal Dian Alfat Muhammad menghadiri Pengajian Selapanan Risalatul Muawanah dan Istighosah Al Karomah Majelis Komando Merah...</p>
            </div>
          </div>
          </div>
      </div>
    </section>

    <!-- Aspirasi Section-->
    <section class="aspirasi py-5 d-none">    
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-7 add-comment">
            <h1>Sampaikan Aspirasi Anda</h1>
            <p class="text-big">Masyarakat Kabupaten Kendal dan sekitarnya dipersilahkan untuk menyampaikan aspirasi kepada DPRD Kabupaten Kendal secara online melalui form di bawah ini.</p>
            <form id="main-opini-formzz" name="aspirasi-formzz" method="post" action="" style="font-size:1em">
                <input name="namaform" class="form-control" type="hidden" value="opini">
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
                    <textarea name="opini" class="form-control" style="resize:none" rows="5" placeholder="Aspirasi" required></textarea>
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
              <a class="banner-link" href="https://kendalkab.go.id" target="_blank"><img src="https://dprd.kendalkab.go.id/uploads/banner/20170404001.png" alt="kendalkab" height="60" /></a>
                <a class="banner-link" href="http://jatengprov.go.id" target="_blank"><img src="https://dprd.kendalkab.go.id/uploads/banner/20170705001.png" alt="pemprov jateng" height="60" /></a>
                <a class="banner-link" href="http://dprd.jatengprov.go.id/" target="_blank"><img src="https://dprd.kendalkab.go.id/uploads/banner/20170705003.png" alt="dprd jateng" height="60" /></a>
                <a class="banner-link" href="https://www.indonesia.go.id/" target="_blank"><img src="https://dprd.kendalkab.go.id/uploads/banner/20170705002.jpg" alt="indonesia.go.id" height="60" /></a>
                <a class="banner-link" href="http://dpr.go.id/" target="_blank"><img src="https://dprd.kendalkab.go.id/uploads/banner/20170705004.png" alt="DPRRI" height="60" /></a>
              </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="display:none">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; Sekretariat DPRD Kabupaten Kendal 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    
    <!-- Page Footer-->
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Pengunjung</h5>
                    <div class="row counters">
                      <div class="col-lg-12 text-center">
                        <span data-toggle="counter-up">1</span>
                          <p>ONLINE</p>
                      </div>
                      <div class="col-lg-12 text-center"><br>
                        <span data-toggle="counter-up">117</span>
                          <p>HARI INI</p>
                      </div>
                      <div class="col-lg-12 text-center"><br>
                        <span data-toggle="counter-up">513511</span>
                          <p>TOTAL</p>
                      </div>
                    </div>            
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Alamat dan Kontak</h5>
                <p>
                  Jl. Soekarno Hatta No.218 Kendal<br>Kode Pos 51311.
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span> +62 294 381 297
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-fax fa-stack-1x fa-inverse"></i>
                    </span> +62 294 381 297
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                    </span> setwan@kendalkab.go.id
                  </li>
    
                </ul>
              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Media Sosial</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="https://www.facebook.com/profile.php?id=100015034058065" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="https://twitter.com/dprdkendal" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-dribble"><a href="https://www.instagram.com/humasdprdkendal" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
    
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-5">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Lokasi Kantor</h5>
                  <div id="peta" class="content" style="width:100%; height:350px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="credit">
        <div class="container">
	        <p class="m-0 text-center text-white">&copy; 2024 - Sekretariat DPRD Kabupaten Kendal</p>
        </div>
      </div>
    </footer>
</div>
<!-- ./wrapper -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://dprd.kendalkab.go.id/plugins/jquery/jquery.min.js"></script>
    <script src="https://dprd.kendalkab.go.id/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
	<script src="https://dprd.kendalkab.go.id/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBGGPsr8kgejsSwYg5Wjnz04Mrnw-fRL6Y"></script>
    <script language="javascript">
		$(document).ready(function($) {

            // ###################################################################################
            var token = 'csrf_test_name',
            	hash = '7c21ac385ee64e5cbb5ece6f8f555229';
            $.ajaxPrefilter(function(options, originalOptions, jqXHR){
                if (options.type.toLowerCase() === "post") {
                    // initialize `data` to empty string if it does not exist
                    options.data = options.data || "";
            
                    // add leading ampersand if `data` is non-empty
                    options.data += options.data?"&":"";
            
                    // add _token entry
                    options.data += token + "=" + hash;
                }
            });		
            // ###################################################################################

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

			//OPINI
			$("#main-opini-form").on("submit",function(e) {
				var fields = $( "#main-opini-form" ).serializeArray(), param="";
				$.each(fields, function(i,field) {
					param += field.name+"="+field.value+"&";
				});
				sendOpini(param);
				return false;
			});
			
			$(".select2").each(function() {
				var placeholder = $(this).data("placeholder");
				$(this).select2({
					placeholder: placeholder
				});
			});
		
			$(".btn[name='Indeks']").on("click",function() {
				window.location = $(this).attr("data-href");
			});
			
			function sendOpini(param) { 
				$.ajax({ 
					type: "POST", 
					url: "https://dprd.kendalkab.go.id/beranda/submit_data", 
					data: param, 
					success: function(response){ 
						window.alert(response);
						$("#main-opini-form").trigger("reset");
					}, error: function() { 
						window.alert('System Error. Mohon diulang kembali.') 
					}
				});
				
			}
/*			
			$(".form-control[name='kecamatan']").on("change",function() {
				var kec = $(this).val();
				//alert(kec);
				//if(kec!="") 
				$(".form-control[name='desa'] option").eq(0).prop("selected",true);
				$(".form-control[name='desa'] option").each(function() {
					if($(this).data("kec")==kec || $(this).data("kec")=="" || kec=="") $(this).show();
					else $(this).hide();
				});
			});

			$(".form-control[name='desa']").on("change",function() {
				var desa = $(this).val();
				var kec = $(".form-control[name='desa'] option").filter(':selected').data("kec");
				$(".form-control[name='kecamatan'] option[value='"+kec+"']").eq(0).prop("selected",true);
/*				
				//alert(kec);
				//if(kec!="") 
				$(".form-control[name='desa'] option").each(function() {
					if($(this).data("kec")==kec || $(this).data("kec")=="" || kec=="") $(this).show();
					else $(this).hide();
				});
* /
			});
*/			
			$(".select2[name='kecamatan']").on("change", function(e) { 
				var kecamatan = $(this).val(); 
				if($(this).find("option[value='"+$(this).val()+"']").data("desa")) {
					var desa = $(this).find("option[value='"+$(this).val()+"']").data("desa");
					$("#page_form .form-control[name='Desa']").val(desa);
				} else {
					$("#page_form .form-control[name='Desa']").val("");
				}
				$(".select2[name='desa'] option").each(function(e) { 
					if($(this).data("kecamatan")) {
						if($(this).data("kecamatan").indexOf(kecamatan)<0) {
							$(this).attr("data-hidden","1");
							if($(this).attr("value")==$(".select2[name='desa']").val()) {
								$(".select2[name='desa']").val('');
								$("#page_form .form-control[name='Alamat']").val('');
//								$("#page_form .form-control[name='Desa']").val('');
							}
						} else {
							$(this).attr("data-hidden","0");
						}
					} else $(this).attr("data-hidden","0");
				});
				$(".select2[name='desa']").select2({
					templateResult: function(option, container) {
						if ($(option.element).attr("data-hidden") == "1"){ 
						  $(container).css("display","none");
						}
						return option.text;
					}
				}).trigger("change");
			})
			
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
    <!--<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
	<style>#gpr-kominfo-widget-body{min-height:400px; overflow: auto;}</style>-->
</body>
</html>
