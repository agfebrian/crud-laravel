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

    public static function find_id($id)
    {
        $item = DB::table('pertanyaans')->where('id_pertanyaan', $id)->get();
        return $item;
    }

    public static function left_join($table, $from, $to)
    {
        $items = DB::table('pertanyaans')->leftJoin($table, $from, '=', $to)->get();
        return $items;
    }

    public static function right_join($table, $from, $to)
    {
        $items = DB::table('pertanyaans')->rightJoin($table, $from, '=', $to)->get();
        return $items;
    }

    public static function where($data, $id)
    {
        $items = DB::table('pertanyaans')->where($data, $id)->get();
        return $items;
    }

    public static function create($data)
    {
        $item = DB::table('pertanyaans')->insert($data);
        return $item;
    }

    public static function update($id, $data)
    {
        $item = DB::table('pertanyaans')->where('id_pertanyaan', $id)->update($data);
        return $item;
    }

    public static function del($id)
    {
        $item = DB::table('pertanyaans')->where('id_pertanyaan', $id)->delete();
        return $item;
    }
}
