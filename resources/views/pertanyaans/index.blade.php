@extends('layouts.master')
@section('content')
    <div class="container mr-auto pt-4">
        <h2>Questions</h2>
        <div class="mt-4">
            @foreach ($items as $item)
                <div class="bg-secondary text-white pl-2">Pertanyaan</div>
                <div class="bg-white rounded shadow-sm mb-3 py-2 pl-2 pr-2 pb-3">
                    <p>{{ $item->isi_pertanyaan }}</p>
                    <span><a href="{{ route('pertanyaan.show', [$item->id_pertanyaan]) }}">Detail</a></span>
                    <span class="ml-2"><a href="{{ route('jawaban.create', [$item->id_pertanyaan]) }}">Komentar</a></span>
                    <span class="ml-2"><a href="{{ route('jawaban.index', [$item->id_pertanyaan]) }}">Jawaban</a></span>
                    <span class="float-right">
                        <form action="{{ route('pertanyaan.delete', [$item->id_pertanyaan]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </span>
                </div>
            @endforeach
        </div>
    </div>
@endsection