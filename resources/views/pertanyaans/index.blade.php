@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
                <div class="bg-secondary text-white pl-2">Pertanyaan</div>
                <div class="bg-white rounded shadow-sm mb-2 py-2 pl-2 pr-2">
                    <p>{{ $item->isi_pertanyaan }}</p>
                    <span><a href="{{ route('jawaban.create', [$item->id]) }}">Komentar</a></span>
                    <span class="ml-2"><a href="{{ route('jawaban.index', [$item->id]) }}">Jawaban</a></span>
                </div>
            @endforeach
        </div>
    </div>
@endsection