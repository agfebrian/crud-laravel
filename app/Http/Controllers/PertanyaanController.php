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

    public function show($id)
    {
        $items = Pertanyaan::left_join('jawabans', 'pertanyaans.id_pertanyaan', 'jawabans.pertanyaan_id')
                ->where('id_pertanyaan', $id);

        return view('pertanyaans.show', ['items' => $items]);
    }

    public function create()
    {
        return view('pertanyaans.create');
    }

    public function store(Request $request)
    {
        Pertanyaan::create([
            'judul' => $request->judul,
            'isi_pertanyaan' => $request->isi_pertanyaan,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('pertanyaan.index')->with('pesan', 'Pertanyaan telah disimpan');
    }

    public function edit($id)
    {
        $item = Pertanyaan::find_id($id);
        return view('pertanyaans.edit', ['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        Pertanyaan::update($id, [
            'judul' => $request->judul,
            'isi_pertanyaan' => $request->isi_pertanyaan,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('pertanyaan.index')->with('pesan', 'Pertanyaan telah diperbarui');
    }

    public function delete($id)
    {
        Pertanyaan::del($id);
        return redirect()->back()->with('pesan', 'Pertanyaan telah dihapus');
    }
}
