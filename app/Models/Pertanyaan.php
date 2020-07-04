<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Pertanyaan
{
    public static function all()
    {
        $items = DB::table('pertanyaans')->get();
        return $items;
    }

    public static function findId($id)
    {
        $item = DB::table('pertanyaans')->where('id', $id)->get();
        return $item;
    }

    public static function create($data)
    {
        $item = DB::table('pertanyaans')->insert($data);
        return $item;
    }
}
