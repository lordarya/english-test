<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                    <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                        alt="MDB Logo" />
                    <small>English Test</small>
                </a>

                <div class="collapse navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="dropdown"><a class="dropdown d-flex align-items-center hidden-arrow"
                                style="text-decoration: none; color: black; font-size: 10pt;" href="#"
                                aria-expanded="false">
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
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="card card-body bg-info">
                                <h6><i class="fas fa-info"></i> <b>Listening Section</b></h6>
                                This page has been enhanced for printing. Click the print button at the bottom of the
                                invoice to test.
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-1 px-2 bg-danger"><i class="fas fa-stopwatch"></i> Timer:
                                        </div>
                                        <div class="col-md-1 bg-success">00:00:00</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <audio controls="true">
                                            <source src="/dist/img/High School in Jakarta.mp3" type="audio/mpeg">
                                        </audio>
                                    </div>
                                    <hr style="background-color: black; border-width: 2px;">
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="list-group">
                                                <div class="list-group-item">
                                                    <form action="">
                                                        <div class="row">
                                                            <h6><b>Soal No. 1</b></h6>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input"
                                                                            type="radio" id="customRadio1"
                                                                            name="customRadio">
                                                                        <label for="customRadio1"
                                                                            class="custom-control-label">My surname is
                                                                            Kennedy.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input"
                                                                            type="radio" id="customRadio2"
                                                                            name="customRadio">
                                                                        <label for="customRadio2"
                                                                            class="custom-control-label">My name is
                                                                            John. </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input"
                                                                            type="radio" id="customRadio3"
                                                                            name="customRadio">
                                                                        <label for="customRadio3"
                                                                            class="custom-control-label">I’m John F.
                                                                            Kennedy.</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <h6><b>Soal No. 2</b></h6>
                                                        <form class="form">
                                                            <div class="form-group row">
                                                                <p for="inputEmail3" class="col-sm-5">What are we going
                                                                    to do immediately?</p>
                                                                <div class="col-sm-12">
                                                                    <input type="email" class="form-control"
                                                                        id="inputEmail3" placeholder="Answer">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right" data-toggle="modal"
                                        data-target="#modal-sm">Submit Test</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- End Main Program -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-white shadow-lg" style="margin-top: 5px ;">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="#">English Test</a>
        </div>
        <!-- Copyright -->
    </div>


    <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Confirmation Message</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you want to submit the answer?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="btn btn-danger" data-dismiss="modal">No</a>
                    <a class="btn btn-success" href="/fontend/readingobjective.html">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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
