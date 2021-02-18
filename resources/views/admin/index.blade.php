@extends("layouts.master")
@section('content')

<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
			<title>Kawal Corona - Coronavirus Global & Indonesia Live Data</title>
		 	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			  <meta name="yandex-verification" content="9d8feb20e4e8d265" />
  			<link rel="shortcut icon" href="../uploads/fav.png">
  			<meta name="description" content="Informasi data terbaru mengenai kasus Virus Corona di seluruh dunia. Data di website kawalcorona.com akan selalu di update secara otomatis dan berasal dari Johns Hopkins University">
  			<meta name="keywords" content="Data Corona, Informasi Data Corona">
  			<meta property="og:image" content="https://kawalcorona.com//uploads/thumbnail.jpg" />
  			<meta name="twitter:image" content="https://kawalcorona.com//uploads/thumbnail.jpg">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('assets/data/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="{{asset('assets/data/css/newstyle.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/data/css/skin-modes.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/data/plugins/horizontal-menu/horizontal-menu.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/data/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/data/plugins/morris/morris.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/data/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/data/css/icons.css" rel="stylesheet')}}"/>
		<link href="{{asset('assets/data/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="data/colors/color1.css" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101162957-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101162957-2');
</script>

	</head>

	<body>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- HEADER -->
				<div class="header hor-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<div class="">
								<a class="header-brand1" href="https://kawalcorona.com/">
									{{-- <img src="{{asset('assets/uploads/logo-ehi.png" class="header-brand-img desktop-logo')}}" alt="logo">
									<img src="{{asset('assets/uploads/logo-ehi.png" class="header-brand-img light-logo')}}" alt="logo"> --}}
								</a><!-- LOGO -->
							</div>
							<div class="d-flex  ml-auto header-right-icons header-search-icon">

								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg">
										<i class="fe fe-maximize fullscreen-button"></i>
									</a>
								</div><!-- FULL-SCREEN -->

							</div>
						</div>
					</div>
				</div>
				<!-- End HEADER -->


				<!-- Mobile Header -->
				<div class="mobile-header hor-mobile-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="https://kawalcorona.com/">
								{{-- <img src="../uploads/logo-ehi.png" class="header-brand-img desktop-logo" alt="logo">
								<img src="../uploads/logo-ehi.png" class="header-brand-img desktop-logo mobile-light" alt="logo"> --}}
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons">


								<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-maximize fullscreen-button"></i>
								</a>
							</div>
							</div>
						</div>
					</div>
				</div>

				<!-- /Mobile Header -->

                <!--app-content open-->
				<div class="container app-content">
					<div class="">

<div class="jumbotron">
	<div class="container">
		<br><h1 class="display-3 text-center">KAWAL CORONA</h1>
		<p class="lead m-0 text-center">Coronavirus Global & Indonesia Live Data</p>
	</div>
</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font">106,865,939</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
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
												<h2 class="mb-0 number-font">59,697,012</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
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
												<h2 class="mb-0 number-font">2,338,189</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="../uploads/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card  bg-orange img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<h2 class="mb-0 number-font">INDONESIA</h2>

												<p class="text-white mb-0"><b>1,174,779</b> POSITIF, <b>973,452</b> SEMBUH, <b>31,976</b> MENINGGAL</p>
											</div>

											<div class="ml-auto"> <img src="../uploads/indonesia-PZq.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col text-center"><p>Update terakhir : 10  Februari 2021 09:11:09 WIB</p></div>
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
								<div class="card overflow-hidden bg-white work-progress">
									<div class="card-header">
										<h3 class="card-title">Statistik Kasus Coronavirus di Indonesia</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="total-coversations" class="h-160 chart-dropshadow-info"></canvas>
										</div>
										<div class="row mt-6">
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">POSITIF</h5>
												<h3 class="text-xxl mb-1 social-content  number-font">1,174,779</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">SEMBUH</h5>
												<h3 class="text-xxl mb-1 social-content danger number-font">973,452</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">MENINGGAL</h5>
												<h3 class="text-xxl mb-1 social-content  number-font">31,976</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>

											</div>
											<div class="chart-wrapper">
											<canvas id="deals" class="chart-dropshadow-success" hidden></canvas>
										</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->

						</div>

            </tbody>

						<div class="row">
							<div class="col-md-12 col-xl-6">
								<a href="https://www.unicef.org/indonesia/id/coronavirus">
								<div class="card text-white bg-orange">
									<div class="card-body">
										<h4 class="card-title">Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui</h4>
										<p class="card-text">Unicef Indonesia</p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
								<div class="card text-white bg-secondary">
									<div class="card-body">
										<h4 class="card-title">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</h4>
										<p class="card-text">Kompas</p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://infeksiemerging.kemkes.go.id/">
								<div class="card text-white bg-success">
									<div class="card-body">
										<h4 class="card-title">Media Informasi Resmi Penyakit Infeksi Emerging</h4>
										<p class="card-text">Kementrian Kesehatan </p>
									</div>
								</div>
							</div></a><!-- COL END -->
							<div class="col-md-12 col-xl-6">
								<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
								<div class="card text-white bg-danger">
									<div class="card-body">
										<h4 class="card-title">Coronavirus Disease (COVID-19) Advice for The Public</h4>
										<p class="card-text">WHO</p>
									</div>
								</div>
							</div></a><!-- COL END -->



					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>



			<!-- FOOTER -->
			<footer>
			<div class="footer border-top-0 footer-1">
										{{-- <div class="container">
											<div class="row align-items-center">
												<div class="social">
													<ul class="text-center">
														<li>
															<a class="social-icon" href="https://fb.me/ethicalhack.id" target="_blank"><i class="fa fa-facebook-square"></i></a>
														</li>
														<li>
															<a class="social-icon" href="https://instagram.com/ethicalhack.id" target="_blank"><i class="fab fa-instagram"></i></a>
														</li>
													</ul>
												</div> --}}
												<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
													<br><a href="https://hack.co.id/"><img src="../uploads/logo-ehi.png" alt="Ethical Hacker Indonesia" width="172" height="45"></a><br><br>
													Powered by <a href="https://hack.co.id/" target="_blank">Ethical Hacker Indonesia</a>. Made with <i class="fa fa-heart"></i> by <a href="https://teguh.co" target="_blank">Teguh Aprianto</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
			</footer>
			<!-- FOOTER END -->
		</div>

		<!-- JQUERY JS -->
		<script src="{{asset('assets/data/js/jquery-3.4.1.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('assets/data/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/data/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('assets/data/js/circle-progress.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{asset('assets/data/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('assets/data/plugins/chart/utils.js')}}"></script>
		<script src="{{asset('assets/data/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/charts-c3/c3-chart.js')}}"></script>
		<script src="{{asset('assets/data/plugins/input-mask/jquery.mask.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('assets/data/plugins/chart/utils.js')}}"></script>
		<script src="{{asset('assets/data/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/horizontal-menu/horizontal-menu.js')}}"></script>
		<script src="{{asset('assets/data/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/peitychart/peitychart.init.js')}}"></script>
		<script src="{{asset('assets/data/plugins/morris/raphael-min.js')}}"></script>
		<script src="{{asset('assets/data/plugins/morris/morris.js')}}"></script>
		<script src="{{asset('assets/data/plugins/sidebar/sidebar.js')}}"></script>
        <script src="{{asset('assets/data/js/index54.js')}}"></script>
		<script src="{{asset('assets/data/js/stiky.js')}}"></script>
		<script src="{{asset('assets/data/js/custom.js')}}"></script>

	</body>
</html>
@endsection
