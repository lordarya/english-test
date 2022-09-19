@extends('jawabanPesertas.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> PESERTA</h2>
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
            <th>Nama</th>
            <th>Level</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pesertas as $jawaban)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jawaban->name }}</td>
            <td>{{ $jawaban->level }}</td>
            <td>
                <form action="{{ route('pesertas.destroy',$jawaban->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('jawabanPesertas.show',$jawaban->id) }}">Show</a>
                    @csrf
                    @method('PUT')
                     
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $pesertas->links() !!}
    </div>
      
@endsection