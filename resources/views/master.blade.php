<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">	
	<title>@yield('page_tittle')Website Kebidanan Unmul</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
       <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script 
        src="http://maps.google.com/maps/api/js?sensor=false">
    </script>
	<style type="text/css">
		body{
			font: 16px/28px times new roman, sans-serif;
			padding-top: 50px;
			padding-bottom: 20px;
			background-image: url("img/background.png");
			color: #333;
		}
		.jos {
			margin-left: 20px;
		}
		.redaksi img{
			padding-right: 12px;

		}
		.jos2{
			margin-left: 380px;
			margin-top: -498px;
		}
		.jos3{
			margin-left: 900px
		}
		.stsrter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
		.tulis{
			font-size: 10px;
			margin-top: 5px;
		}
		.tulis a{
			color: salmon;
			text-decoration: none;
		}
		footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				 <a class="navbar-brand" href="http://unmul.ac.id/">Universitas Mulawarman</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                   <!--  <li>
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tips Kesehatan</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="#">Buah Hati</a></li>
							<li class="divider"></li>
							<li><a href="#">Bunda</a></li>
						</ul>
					</li> -->
					<li>
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bidan</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('bidan')}}">Daftar Bidan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('jadwal')}}">Jadwal</a></li>
							<li class="divider"></li>
							<li><a href="{{url('jadwalbidan')}}">Jadwal Bidan</a></li>
							<!-- <li class="divider"></li> -->
							<!-- <li><a href="{{url('visimisi')}}">Visi dan Misi</a></li> -->
						</ul>
					</li>
					<li>
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pasien</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('ibu')}}">Pasien Melahirkan</a></li>
							<li class="divider"></li>
							<!-- <li><a href="{{url('rekammedis')}}">Rekam Medis</a></li>
							<li class="divider"></li> -->
							<li><a href="{{url('bayi')}}">Bayi Pasien Melahirkan</a></li>
						
						</ul>
					</li>
					<!-- <li>
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('ruangan')}}">Ruangan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('keterangan')}}">Keterangan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('admin')}}">Tambah Admin</a></li>
							
						</ul> -->
						<li>
                        <a href="about.html">About</a>
                    </li>
					</li>
					<li><a href="{{url('login')}}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
				</ul>
				
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
		<div class="alert alert-info">
		<a href="{{url('bidan')}}">
			<strong>Informasi: </strong>{{Session::get('informasi')}}
			</a>
		</div>
		@endif	
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $errors)
				<li>{{$errors}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@yield('container')
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      <img src="img/gambar 1.jpg" width="64%" height="50%" alt="Kebidanan">
      <div class="carousel-caption">
        <h3>Selamat Datang di Wibsite Kebidanan Unmul</h3>
    	<p>Fakultas Kebidanan Universitas Mulawarman</p>
      </div>
    </div>
    <div class="item" align="center">
      <img src="img/bidan 2.jpg" width="79%" height="50%" alt="...">
      <div class="carousel-caption">
        <h3>Kami Siap Melayani Anda</h3>
        <p>Mari, Selamatkan Generasi penerus Bangsa</p>
      </div>
    </div>
    ...
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div >
	<table border="0" width="80%" align="center">
		<tr>
			<td>
				<div class="row">
            <div class="col-lg-12">
            <div align="center"><h1>Selamat Datang di Website Kebidanan Unmul</h1></div>
            <div class="thumbnail">
            <div class="panel-heading">
                <h3 class="page-header"><b>Layanan BPJS</b><div class="tulis">Ditulis oleh <a>Ridwan Kurniadi</a>, Pada 18/05/2017</div></h3>
                <div class="redaksi"><img src="img/bp.jpg" width="450px" style="float:left"></div>
                <p>
                  <p align="justify">Bagi Ibu Hamil daftarkan diri anda ke program BPJS Kesehatan, bila perlu sekaligus mendaftarkan bayi anda yang masih ada didalam kandungan, walau ini belum diharuskan, tapi untuk penjagaan. Ibu Hamil yang sudah terdaftar sebagai peserta BPJS Kesehatan supaya selalu memeriksakan kehamilannya ketika ada gejala – gejala yang dirasakan.</p>
                <p align="justify">Secara prosedural Ibu Hamil (Peserta BPJS) dapat memeriksakan dirinya ke Fasilitas Kesehatan tingkat pertama yaitu seperti Puskesmas, Klinik dsb sesuai yang tercantum dalam Kartu Peserta BPJS yang anda miliki. Anda akan mendapatkan layanan medis dari dokter yang berkompeten di bidang kandungan dan bayi.</p>
                </p>
                <p align="justify"><b>Pelayanan yang dijamin oleh BPJS meliputi:</b> <i>a) pelayanan pemeriksaan kehamilan (antenatal care / ANC) untuk menjaga kesehatan dan keselamatan ibu dan bayi, b) persalinan, c) pemeriksaan bayi baru lahir, d) pemeriksaan pasca persalinan (postnatal care / PNC) terutama selama nifas awal selama 7 hari setelah melahirkan, dan e) pelayanan KB.</i></p>
                <p align="justify">Pelayanan ANC dan PNC dapat dilakukan di fasilitas kesehatan pertama seperti puskesmas, klinik, atau dokter keluarga. Pemeriksaan ini dilakukan di tempat yang sama, kecuali dalam keadaan darurat. Begitu juga dengan persalinan Ibu Hamil dapat dilakukan di faskes pertama, jika terjadi keadaan darurat seperti pendarahan dsb yang dapat menyebabkan kematian pada bayi atau ibu maka bisa langsung ke faskes tingkat lanjutan.</p>
                </div>
            </div>
            </div>
			</td>
		</tr>
	</table>
		<!--<div class="jos">
		<div class="row">
					  <div class="col-sm-6 col-md-3">
					    <div class="thumbnail">
					      <img src="img/ridwan.JPG" alt="ridwan">
					      <div class="caption" align="center">
					        <h3>Ridwan Kurniadi</h3>
					        <p>NIM: 1515015013</p>
					        <p>TTL : Purwodadi, 25 mei 1997</p>
					        <p>Hobby : Olahraga, Design, Making Vidio</p>
					      </div>
					    </div>
					  </div>
					</div>
					</div>
						<div class="jos2">
		<div class="row">
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="img/yudi.JPG" alt="ridwan">
					      <div class="caption" align="center">
					        <h3>Yudi Kurniawan</h3>
					        <p>NIM: 1515015013</p>
					        <p>TTL : Purwodadi, 25 mei 1997</p>
					        <p>Hobby : Olahraga, Design, Making Vidio</p>
					      </div>
					    </div>
					  </div>
					</div>
					</div>
					<div class="jos3">
		<div class="row">
					  <div class="col-sm-6 col-md-7">
					    <div class="thumbnail">
					      <img src="img/ridwan.JPG" alt="ridwan">
					      <div class="caption" align="center">
					        <h3>Ridwan Kurniadi</h3>
					        <p>NIM: 1515015013</p>
					        <p>TTL : Purwodadi, 25 mei 1997</p>
					        <p>Hobby : Olahraga, Design, Making Vidio</p>
					      </div>
					    </div>
					  </div>
					</div>
					</div> -->
</div>
<script>
        function initialize() {
        var position = new google.maps.LatLng(-0.469481, 117.154160);
        
        var myOptions = {
          zoom: 8,
          center: position,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map(
            document.getElementById("map_canvas"),
            myOptions);

        var marker = new google.maps.Marker({
            position: position,
            map: map,
            title:"This is the place."
        });  

        var contentString = 'Ibukota<strong> Provinsi Kalimantan Timur</strong>!';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
          
        });

      }
    </script>
</head>
<body onload="initialize()">
<!--- Bagian Judul-->   
<div class="container" style="margin-top:10px"> 

    <div class="row">
        <div class="col-md-16">
            <div class="panel panel-default">
                <div class="panel-heading">Maps Universitas Mulawarman</div>
                    <div class="panel-body">
                        <div id="map_canvas" style="width:1135px; height:500px"></div>
                    </div>
            </div>
        </div>  
    </div>35/div>  

	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
		<div class="col-lg-12"><i style="color:blue">
		Copyright© 2017 By Kelompok Tiga</div>
		</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
	$(function(){
		$('[data-toggle="tooltip"]').tooltip()
	});
	</script>
</body>
</html>