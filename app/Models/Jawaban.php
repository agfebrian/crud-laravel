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

    public static function find_id($id)
    {
        $item = DB::table('jawabans')->where('id_jawaban', $id)->get();
        return $item;
    }

    public static function selection($table, $table_)
    {
        $items = DB::table('jawabans')->select($table, $table_)->get();
        return $items;
    }

    public static function right_join($table, $from, $to)
    {
        $items = DB::table('jawabans')->rightJoin($table, $from, '=', $to)->get();
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
