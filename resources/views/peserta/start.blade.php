@extends('layouts.app')
@section('content')
    <!-- Main Program -->
    <div class="container">
        <h6 style="padding-left: 115px; margin-bottom: 0px !important;"><b>Ujian Bahasa Inggris</b></h6>
        <div class="row justify-content-center" style="margin-top: -5px !important;">
            <div class="col-md-10">
                <div class="card-body">
                    <div class="alert alert-info alert-dismissible">
                        <h5><i class="icon fas fa-info"></i> Peraturan!</h5>
                        Info alert preview. This alert is dismissable.
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: -20px !important;">
            <div class="col-md-10" style="max-width: 910px !important;">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0">Konfirmasi Data Peserta Ujian</h5>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Nama Peserta</th>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nim</th>
                                        <td>{{ $detail->nim }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Soal</th>
                                        <td>200</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Ujian</th>
                                        <td>{{ $detail->test_date }}</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu</th>
                                        <td>120 menit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <p class="card-text">Klik Start Saat Memulai Test</p>
                        <a @if ($detail->is_attempt == false) href=" {{ 'https://google.com' }} " @endif
                            class="btn @if ($detail->is_attempt == true) btn-secondary @endif @if ($detail->is_attempt == false) btn-info @endif">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Program -->
@endsection
