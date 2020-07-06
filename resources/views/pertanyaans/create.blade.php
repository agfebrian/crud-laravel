@extends('layouts.master')
@section('content')
    <div class="container pt-4">
      <div class="pt-4">
        <form action="{{ route('pertanyaan.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="judul"><strong>Judul</strong></label>
              <input class="form-control" type="text" name="judul">
          </div>
            <div class="form-group">
              <label for="pertanyaan"><strong>Isi Pertanyaan</strong></label>
              <textarea class="form-control" id="pertanyaan" rows="3" name="isi_pertanyaan"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">SIMPAN</button>
            </div>
        </form>       
      </div>   
    </div>
@endsection