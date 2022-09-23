<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Peserta Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>

<body>
  <div id="app">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20" alt="MDB Logo" />
          <small>English Test</small>
        </a>

        <div class="collapse navbar-collapse">
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <li class="dropdown"><a class="dropdown d-flex align-items-center hidden-arrow"
                style="text-decoration: none; color: black; font-size: 10pt;" href="#" aria-expanded="false">
                <img src="../dist/img/user.jpg" class="rounded-circle" height="40" />
                <div class="d-sm-none d-lg-inline-block" style="padding-left: 5px;">Nama Peserta</div>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main Program -->
    <main class="py-4">
      <div class="container">
        <h6 style="padding-left: 115px; margin-bottom: 0px !important;"><b>Ujian Bahasa Inggris</b></h6>
        <div class="row justify-content-center" style="margin-top: -5px !important;">
          <div class="col-md-10">
            <div class="card-body">
              <div class="alert alert-info alert-dismissible">
                <h5><i class="icon fas fa-info"></i> Attention!</h5>
                Congratulations, you have completed the English test
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center" style="margin-top: -20px !important;">
          <div class="col-md-10" style="max-width: 910px !important;">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Data Peserta Ujian</h5>
              </div>
              <div class="card-body">
                <form action="">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>Nama Peserta</th>
                        <td>Adnya Pramesti</td>
                      </tr>
                      <tr>
                        <th>No. Ujian</th>
                        <td>00199</td>
                      </tr>
                      <tr>
                        <th>Jumlah Soal</th>
                        <td>200</td>
                      </tr>
                      <tr>
                        <th>Tanggal Ujian</th>
                        <td>15/09/2022</td>
                      </tr>
                      <tr>
                        <th>Waktu</th>
                        <td>120 menit</td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                <p class="card-text">Klik Logout untuk keluar aplikasi</p>
                <a href="/fontend/login.html" class="btn btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- End Main Program -->

    <!-- Copyright -->
    <div class="text-center p-3 bg-white shadow-lg" style="margin-top: 5px ;">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#">English Test</a>
    </div>
    <!-- Copyright -->
  </div>

  <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>

</html>
