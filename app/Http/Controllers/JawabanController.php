<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Jawaban;

class JawabanController extends Controller
{
    public function index($id)
    {
        $items = Jawaban::right_join('pertanyaans', 'jawabans.pertanyaan_id', 'pertanyaans.id')
                ->where('id', $id);
        return view('jawabans.index', ['items' => $items]);
    }
    public function create($id)
    {
        $items = Pertanyaan::findId($id);
        return view('jawabans.create', ['items' => $items]);
    }

    public function store(Request $request)
    {
        Jawaban::create([
            'pertanyaan_id' => $request->pertanyaan_id,
            'isi_jawaban' => $request->isi_jawaban
        ]);

        return redirect()->route('jawaban.index', [$request->pertanyaan_id]);
    }
}
