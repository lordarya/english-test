@extends('layouts.app')

@section('content')
    <input type="hidden" id="jawabancount" value="{{ $lastJawaban }}">
    <input type="hidden" id="id_soal" value="{{ $soal->id }}">
    <input type="hidden" id='url' value="{{ URL::to('/') }}">
    <!-- Main Program -->
    <main class="py-4">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="card card-body bg-info">
                            <h6><i class="fas fa-info"></i> <b>Reading Section</b></h6>
                            This page has been enhanced for printing. Click the print button at the bottom of the invoice to
                            test.
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-1 px-1 bg-danger"><i class="fas fa-stopwatch"></i> Timer:</div>
                                    <div class="col-md-1 bg-success">00:00:00</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="list-group">
                                            @if (!empty($narasi))
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <h6><b>Direction</b></h6>
                                                        <div class="form-group row">
                                                            <p class="col-sm-12">
                                                                {{ $narasi->narasi }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="list-group-item">
                                                <div class="row">
                                                    <h6><b>Soal No. 1</b></h6>
                                                    <form class="form">
                                                        <div class="form-group row">
                                                            <p for="inputEmail3" class="col-sm-5">{{ $soal->soal }}</p>
                                                            <div class="col-sm-12">
                                                                @if ($soal->jenis == 2)
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="essay" placeholder="Answer"
                                                                            @foreach ($jawabanpesertas as $jawabanpeserta)
                                                                            @if ($jawabanpeserta->soals_id == $soal->id)
                                                                                {{ 'value=' . $jawabanpeserta->jawaban }}
                                                                            @endif @endforeach>
                                                                    </div>
                                                                @else
                                                                    <div class="form-group row">
                                                                        @foreach ($jawabans as $jawaban)
                                                                            @if ($jawaban->soals_id == $soal->id)
                                                                                <div class="col-md-4">
                                                                                    <div
                                                                                        class="custom-control custom-radio">
                                                                                        <input
                                                                                            @foreach ($jawabanpesertas as $jawabanpeserta)
                                                                                            @if ($jawabanpeserta->jawabans_id == $jawaban->id)
                                                                                             checked
                                                                                            @endif @endforeach
                                                                                            class="custom-control-input"
                                                                                            type="radio"
                                                                                            id="jawaban{{ $jawaban->id }}"
                                                                                            name="soal{{ $soal->id }}"
                                                                                            value="{{ $jawaban->id }}">
                                                                                        <label
                                                                                            for="jawaban{{ $jawaban->id }}"
                                                                                            class="custom-control-label">
                                                                                            {{ $jawaban->jawaban }}</label>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                @endif
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
                                <a type="submit" class="btn btn-info float-left">Soal Sebelumnya</a>
                                <a type="submit" href="/fontend/finish.html" class="btn btn-info float-right">Soal
                                    Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">Nomor Soal</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    @foreach ($soalsection as $soals)
                                        <div class="col-md-3">
                                            <a href="{{ route('readingsection.show', $soals->id) }}"
                                                class="btn @if ($soal->id == $soals->id) btn-secondary @else btn-primary @endif">{{ $loop->iteration }}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                                <a href="{{ route('storejawaban.index') }}" class="btn btn-info float-left">Finish</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Main Program -->


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let countjawaban = $('#jawabancount').val();
            let url = $('#url').val();
            let id_soal = $('#id_soal').val();
            var jawaban = [];
            for (let index = 1; index <= countjawaban; index++) {
                jawaban[index] = $('#jawaban' + index.toString());
            }

            for (let index = 1; index <= countjawaban; index++) {
                jawaban[index].click(function(e) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var jawabanpeserta = jawaban[index].val();
                    $.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/english-test/storejawaban',
                        data: {
                            jawabans_id: jawabanpeserta,
                            soals_id: id_soal
                        },
                        dataType: 'json',
                        success: function(data) {}
                    });
                });
            }
            essay = $('#essay');


            essay.change(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: 'http://127.0.0.1:8000/english-test/storejawaban',
                    data: {
                        jawaban: essay.val(),
                        soals_id: id_soal
                    },
                    dataType: 'json',
                    success: function(data) {}
                });
            });
        });
    </script>
@endsection
