<?php


namespace App\Http\Controllers;

use App\Models\Pen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenController extends Controller
{

    // Eloquentでデータを挿入。PenModelのルールが適応される。
    public function fillPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen->fill([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'FillPen',
            'price' => 1500,
        ]);
        $pen->save();
    }

    // Eloquentでデータを挿入。PenModelのルールが適応される。
    public function createPen()
    {
        $uuid = (string)Str::uuid();
        Pen::create([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'CreatePen',
            'price' => 1200,
        ]);
    }

    // SQLで直接データを挿入。PenModelのルールが適応されない。
    public function insertPen()
    {
        $pen = new Pen();
        $uuid = (string)Str::uuid();
        $pen::insert([
            'id' => 20,
            'uuid' =>  $uuid,
            'name' => 'InsertPen',
            'price' => 1800,
        ]);
    }
}