<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking COVID-19</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo-active.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="col-md-12 text-center">
    <h1 class="white typed">Coronavirus Global & Indonesia Live Data</h1>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-primary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL POSITIF</p>
            <h2 class="mb-0 number-font"><b>{{$positif}}</b></h2>
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
            <h2 class="mb-0 number-font"><b>{{$sembuh}}</b></h2>
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
            <h2 class="mb-0 number-font"><b>{{$meninggal}}</b></h2>
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
            <p class="mb-0 number-font"><b>{{$positif}}</b> POSITIF, <b>{{$sembuh}}</b> SEMBUH, <b>{{$meninggal}}</b>MENINGGAL</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="50" height="50" alt="Positif"> </div>
          </div>
         </div>
        </div>
        </div><!-- COL END -->
        </div>

    </section>
    <!-- End Why Us Section -->
    {{-- <div class="chart-wrapper">
        <canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden=""
            height="85" width="0" style="display: block; width: 0px; height: 85px;"></canvas>
    </div> --}}

    {{-- <section id="about" class="about">
      <div class="container-fluid">

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

      </div>
    </section><!-- End About Section --> --}}

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
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

      </div>
    </section>
    <!-- End Counts Section -->

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
{{-- @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var tanggal = <?php echo $casesTanggal; ?>;    var positif = <?php echo $casesPositif; ?>;    var sembuh = <?php echo $casesSembuh; ?>;    var meninggal = <?php echo $casesMeninggal; ?>;    var barChartData = {
            labels: tanggal,
            datasets: [{
                label: 'Positif',
                backgroundColor: "rgba(252, 186, 3)",
                data: positif
            }, {
                label: 'Sembuh',
                backgroundColor: "rgba(11, 212, 64)",
                data: sembuh

            }, {
                label: 'Meninggal',
                backgroundColor: "rgba(227, 69, 25)",
                data: meninggal
            }]
        };

        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Kasus Covid-19 Indonesia'
                }
            }
        });

    </script>


@endsection --}}
