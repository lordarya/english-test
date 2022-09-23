@extends('layouts.app')

@section('content')
    <!-- Main Program -->
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10" style="max-width: 910px !important;">
                    <div class="card card-info card-outline">
                        <div class="card-body" style="height: 430px;">
                            <h5 class="card-text text-center" style="padding-top: 150px;"><b>Click Finish To Complete The
                                    Test</b></h5>
                            <center>
                                <form action="{{ route('storejawaban.update', 1) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-info" style="margin-top: 10px;" data-toggle="modal"
                                        data-target="#modal-sm">Finish</button>
                                </form>
                            </center>
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
                    <p>Do you want to finish the test?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <a type="button" class="btn btn-danger" data-dismiss="modal">No</a>
                    <a href="/fontend/selesaitest.html" class="btn btn-success">Yes</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
