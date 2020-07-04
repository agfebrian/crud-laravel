<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function all()
    {
        $items = DB::table('jawabans')->get();
        return $items;
    }

    public static function join($table, $from, $to)
    {
        $items = DB::table('jawabans')->join($table, $from, '=', $to)->get();
        return $items;
    }

    public static function where($data, $id)
    {
        $items = DB::table('jawabans')->where($data, $id)->get();
        return $items;
    }

    public static function create($data)
    {
        $item = DB::table('jawabans')->insert($data);
        return $item;
    }
}
