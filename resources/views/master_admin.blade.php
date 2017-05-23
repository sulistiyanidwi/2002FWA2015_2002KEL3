<!DOCTYPE html>
<html lang="en">
<head>
	<meta charshet="UTF-8">		
	<title>@yield ('page_tittle','Halaman Awal') | Bidan Kita</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
		body{
			padding-top: 70px;
			padding-bottom: 70px;
			background-image: url("img/background.png");
		}
		.stsrter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
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
			<div class="nvbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<a href="{{url('/')}}" class="navbar-brand"><span class="glyphicon glyphicon-home"></span></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
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
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pasien</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('ibu')}}">Pasien Melahirkan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('rekammedis')}}">Rekam Medis</a></li>
							<li class="divider"></li>
							<li><a href="{{url('bayi')}}">Bayi Pasien Melahirkan</a></li>
						
						</ul>
					</li>
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaturan</a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('ruangan')}}">Ruangan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('keterangan')}}">Keterangan</a></li>
							<li class="divider"></li>
							<li><a href="{{url('admin')}}">Tambah Admin</a></li>
							
						</ul>
					</li>
					<li><a href="{{url('logout')}}">Logout</a></li>
				</ul>
				
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="clearfix"></div>
	<div class="container">
		@if (Session::has('informasi'))
		<div class="alert alert-info">
			<strong>Informasi: </strong>{{Session::get('informasi')}}
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
	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container" color="blue">
			created by Kelompok Tiga</footer>
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