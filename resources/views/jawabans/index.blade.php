@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
            <div class="bg-secondary text-white pl-2">Pertanyaan</div>    
            <div class="bg-white rounded shadow-sm pt-2 pb-4 pl-2 pr-2">
                    {{ $item->isi_pertanyaan }}
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