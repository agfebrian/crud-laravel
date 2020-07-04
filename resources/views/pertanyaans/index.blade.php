@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
                <div class="bg-white rounded shadow-sm py-2 pl-2 pr-2">
                    <p>{{ $item->isi_pertanyaan }}</p>
                    <span><a href="{{ route('jawaban.create', [$item->id]) }}">Komentar</a></span>
                </div>
            @endforeach
        </div>
    </div>
@endsection