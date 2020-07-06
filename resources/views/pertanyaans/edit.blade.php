@extends('layouts.master')
@section('content')
    <div class="container pt-4">
      <div class="pt-4">
        @foreach ($item as $item)
            <form action="{{ route('pertanyaan.update', [$item->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul"><strong>Judul</strong></label>
                    <input class="form-control" type="text" name="judul" value="{{ $item->judul }}">
                </div>
                <div class="form-group">
                    <label for="pertanyaan"><strong>Isi Pertanyaan</strong></label>
                    <textarea class="form-control" id="pertanyaan" rows="3" name="isi_pertanyaan">{{ $item->isi_pertanyaan }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">UPDATE</button>
                </div>
            </form>       
        @endforeach
      </div>   
    </div>
@endsection