@extends('layouts.master')
@section('content')
    <div>
        <form action="{{ route('pertanyaan.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="pertanyaan">Pertanyaan</label>
              <textarea class="form-control" id="pertanyaan" rows="3" name="isi_pertanyaan"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">SIMPAN</button>
            </div>
          </form>          
    </div>
@endsection