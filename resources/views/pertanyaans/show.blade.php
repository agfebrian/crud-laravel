{{-- @extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
                <div class="bg-secondary text-white pl-2">Detail Pertanyaan</div>
                <div class="bg-white rounded shadow-sm mb-2 py-2 pl-2 pr-2">
                    <p>{{ $item->isi_pertanyaan }}</p>
                    <span><a href="{{ route('pertanyaan.show', [$item->id]) }}">Detail</a></span>
                    <span class="ml-2"><a href="{{ route('jawaban.create', [$item->id]) }}">Komentar</a></span>
                    <span class="ml-2"><a href="{{ route('jawaban.index', [$item->id]) }}">Jawaban</a></span>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}
@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
            <div class="bg-secondary text-white pl-2">Detail Pertanyaan</div>    
            <div class="bg-white rounded shadow-sm pt-2 pb-4 pl-2 pr-2">
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ $item->isi_pertanyaan }}</p>
                    <p>Dipublikasikan pada: <small>{{ $item->created_at != null ? date('l, d F Y', strtotime($item->created_at)) : '-' }}</small></p>
                    <p>Diperbarui pada: <small>{{ $item->updated_at != null ? date('l, d F Y', strtotime($item->updated_at)) : '-' }}</small></p>
                </div>
                @break
            @endforeach
            @foreach ($items as $item)
                <div class="bg-secondary text-white mt-4 pl-2">Jawaban</div>
                <div class="bg-white py-2 pl-2 pr-2 rounded-bottom">{{ $item->isi_jawaban ?? "Belum ada jawaban" }}</div>
            @endforeach
        </div>
    </div>
@endsection