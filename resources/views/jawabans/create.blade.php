@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
      <h2>Questions</h2>
      <div class="mt-4">
          @foreach ($items as $item)
            <div class="bg-white rounded shadow-sm py-2 pl-2 pr-2">
                {{ $item->isi_pertanyaan }}
            </div>
            <form action="{{ route('jawaban.store') }}" method="POST">
                @csrf
                <input type="hidden" name="pertanyaan_id" value="{{ $item->id }}">
                <div class="pt-4">
                  <div class="form-group">
                    <label for="pertanyaan">Isi Komentar</label>
                    <textarea class="form-control" id="pertanyaan" rows="3" name="isi_jawaban"></textarea>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-primary">Komentar</button>
                  </div>
                </div>
            </form>
          @endforeach
      </div>
    </div>
@endsection
