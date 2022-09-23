@extends('layouts.app')
@section('content')
    <!-- Main Program -->
    <main class="py-4">
        <input type="hidden" id="soalcount" value="{{ $lastSoal }}">
        <input type="hidden" id="jawabancount" value="{{ $lastJawaban }}">
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="card card-body bg-info">
                            <h6><b>I. Listening Section</b></h6>
                            This page has been enhanced for printing. Click the print button at the bottom of the invoice to
                            test.
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-1 px-2 bg-danger"><i class="fas fa-stopwatch"></i> Timer:</div>
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
                                            @foreach ($soalsection as $soal)
                                                <div class="list-group-item">
                                                    <div class="row">
                                                        <h6><b>Soal No. {{ $loop->iteration }}</b></h6>
                                                        <div class="form-group row">
                                                            <p class="col-sm-5">
                                                                {{ $soal->soal }}</p>
                                                            <div class="col-sm-12">
                                                                @if ($soal->jenis == 2)
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            id="essay{{ $soal->id }}"
                                                                            placeholder="Answer"
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
                                                                                            value="{{ $jawaban->id . '.' . $soal->id }}">
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
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right" data-toggle="modal"
                                    data-target="#modal-sm">Submit
                                    Test</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- End Main Program -->


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
                    <form action="{{ route('listeningsection.update', 1) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success" href="/fontend/readingobjective.html">Yes</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function() {
            let countjawaban = $('#jawabancount').val();
            let countsoal = $('#soalcount').val();
            var jawaban = [];
            var essay = [];
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
                    var test = jawabanpeserta.match(/(.+)\.(.+)/);
                    $.ajax({
                        type: 'POST',
                        url: '/english-test/storejawaban',
                        data: {
                            jawabans_id: test[1],
                            soals_id: test[2]
                        },
                        dataType: 'json',
                        success: function(data) {}
                    });
                });
            }
            for (let index = 1; index <= countsoal; index++) {
                essay[index] = $('#essay' + index.toString());
            }

            for (let index = 1; index <= countsoal; index++) {
                essay[index].change(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: '/english-test/storejawaban',
                        data: {
                            jawaban: essay[index].val(),
                            soals_id: index
                        },
                        dataType: 'json',
                        success: function(data) {}
                    });
                });


            }
        });
    </script>
@endsection
