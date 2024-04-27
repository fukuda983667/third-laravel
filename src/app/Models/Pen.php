<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pen extends Model
{
    use HasFactory;


    // Eloquent で書き換え可能がどうかの指定
    // $guardedはブラックリスト、$fillableはホワイトリストと呼ばれることもある。
    // $guardedに格納すると指定のカラムに対して書き換え不可能にする。
    protected $guarded = [
        'id'
    ];

    // $fillableに格納すると指定のカラムに対して書き換え可能にする。
    protected $fillable = [
        'uuid', 'name', 'price'
    ];
}
