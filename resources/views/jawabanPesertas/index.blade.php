@extends('jawabanPesertas.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>JAWABAN PESERTA</h2>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Soal</th>
            <th>Jawaban</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jawabans as $jawaban)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jawaban->soal }}</td>
            <td>{{ $jawaban->jawaban }}</td>
            <td>
                <form action="{{ route('jawabanPesertas.update',$jawaban->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="is_checked" value="1"  > 
                    <input type="hidden" name="is_true" value="1"  > 
                    <button type="submit" class="btn btn-primary">Benar</button>
                </form>
                <form action="{{ route('jawabanPesertas.update',$jawaban->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="is_checked" value="1"  > 
                    <button type="submit" class="btn btn-danger">Salah</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $jawabans->links() !!}
    </div>
      
@endsection