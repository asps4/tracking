<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tracking COVID-19</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/apple-touch-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-touch-icon-60x60.png')}}">
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicons/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicons/favicon-16x16.png')}}" sizes="16x16">
	<link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
	<link rel="shortcut icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="{{asset('assets/img/favicons/browserconfig.xml')}}">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/normalize.css')}}">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.css')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/eleganticons/et-icons.css')}}">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/cardio.css')}}">
</head>

<body class="antialiased">
	<div class="preloader">
		<img src="{{asset('assets/img/loader.gif')}}" alt="Preloader image">
	</div>

	<header id="intro">

        <div class="container d-flex align-items-center">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('login')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('dashboard')}}">Data Kasus</a>
                    </li>
                </div>
              </nav>
		<div class="container">

			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Kawal Corona | Tracking COVID-19</h3>
							<h1 class="white typed">Coronavirus Global & Indonesia Live Data</h1>
							<span class="typed-cursor">|</span>

                            <div class="row">
                                <div class="col-sm">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-danger img-card box-primary-shadow">
                         <div class="card-body">
                          <div class="d-flex">
                           <div class="text-white">
                            <p class="text-white mb-0">TOTAL POSITIF</p>
                            <h2 class="mb-0 number-font"><?php echo $posglobal['value'] ?></h2>
                            <p class="text-white mb-0">ORANG</p>
                           </div>
                           <div class="ml-auto"> <img src="{{asset('assets/img/sad-u6e.png')}}" width="50" height="50" alt="Positif"> </div>
                          </div>
                         </div>
                        </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card bg-success img-card box-secondary-shadow">
                         <div class="card-body">
                          <div class="d-flex">
                           <div class="text-white">
                            <p class="text-white mb-0">TOTAL SEMBUH</p>
                            <h2 class="mb-0 number-font"><?php echo $semglobal['value'] ?></h2>
                            <p class="text-white mb-0">ORANG</p>
                           </div>
                           <div class="ml-auto"> <img src="{{asset('assets/img/happy-ipM.png')}}" width="50" height="50" alt="Positif"> </div>
                          </div>
                         </div>
                        </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card  bg-secondary img-card box-success-shadow">
                         <div class="card-body">
                          <div class="d-flex">
                           <div class="text-white">
                            <p class="text-white mb-0">TOTAL MENINGGAL</p>
                            <h2 class="mb-0 number-font"><?php echo $menglobal['value'] ?></h2>
                            <p class="text-white mb-0">ORANG</p>
                           </div>
                           <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="50" height="50" alt="Positif"> </div>
                          </div>
                         </div>
                        </div>
                        </div><!-- COL END -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card  bg-info img-card box-success-shadow">
                         <div class="card-body">
                          <div class="d-flex">
                           <div class="text-white">
                            <h2 class="text-white mb-0">INDONESIA</h2>
                            <p class="mb-0 number-font"><b>{{$positif}}</b> POSITIF, <b>{{$sembuh}}</b> SEMBUH, <b>{{$meninggal}}</b>MENINGGAL</p><br><br>
                           </div>
                           <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"> </div>
                          </div>
                         </div>
                        </div>
                        </div><!-- COL END -->
                        </div>
                        <br>
                        </section><!-- End About Section -->

                            <div class="card-header ">
                            &nbsp;
                        <section class="showcase">
                        <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                        <div class="card">
                        <div class="col text-center">
                                                        <h6><br><p>Update terakhir : {{ $tanggal }}</p></h6>
                                                    </div>
                        <section id="kasusdunia" class="kasusdunia"><center>
                          <div class="card-header">Data Kasus Corona Virus Berdasarkan Negara</div></center>
                          <div class="card-body">
                            <div style="height:600px;overflow:auto;margin-right:15px;">
                            <table class="table table-striped">
                                     <div class="card-body" >
                                     <thead>
                                                            <tr>
                                                                <th>NO.</th>
                                                                <th>NEGARA</th>
                                                                <th>POSITIF</th>
                                                                <th>SEMBUH</th>
                                                                <th>MENINGGAL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $no = 1;
                                                          @endphp
                                                            @foreach($dunia as $data)
                                                                <tr>
                                                                  <th>{{$no++ }}</th>
                                                                  <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                                                                  <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                                                                  <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                                                                  <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                                                                </tr>
                                                              @endforeach
                                                 </tbody>
                                                 </table>


                                     </div>
                                   </div>
                                <br>

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>


<div class="card-header ">
&nbsp;
<section class="showcase">
<div class="container-fluid">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<div class="card">
<section id="kasusindonesia" class="kasusindonesia"><center>
  <div class="card-header">Data Kasus Corona Virus Berdasarkan Provinsi</div></center>
  <div class="card-body">
    <div style="height:600px;overflow:auto;margin-right:15px;">
    <table class="table table-striped">
      <thead>
        <th>No</th>
        <th>Provinsi</th>
        <th>Positif</th>
        <th>Sembuh</th>
        <th>Meninggal</th>
      </thead>
      <tbody>
      @php $no=1; @endphp
                                    @foreach($tampil as $tmp)

                                <tr>
                                    <th>{{$no++ }}</th>
                                    <th>{{$tmp->nama_provinsi}}</th>
                                    <th>{{number_format($tmp->Positif)}}</th>
                                    <th>{{number_format($tmp->Sembuh)}}</th>
                                    <th>{{number_format($tmp->Meninggal)}}</th>
                                </tr>
        @endforeach

    </tbody>
  </table>
</div>
</div>
</div>


</section>
&nbsp;



	<footer>




			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2015 All Rights Reserved. Powered by <a href="http://www.phir.co/">PHIr</a> exclusively for <a href="http://tympanus.net/codrops/">Codrops</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/js/typewriter.js')}}"></script>
	<script src="{{asset('assets/js/jquery.onepagenav.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
