<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $items = Pertanyaan::all();
        return view('pertanyaans.index', ['items' => $items]);
    }
    public function create()
    {
        return view('pertanyaans.create');
    }

    public function store(Request $request)
    {
        Pertanyaan::create([
            'isi_pertanyaan' => $request->isi_pertanyaan
        ]);

        return redirect()->route('pertanyaan.index')->with('pesan', 'Pertanyaan telah disimpan');
    }
}
