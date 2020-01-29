<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['user_id', 'content'];

    /**
     * 一対多の関係を表現
     * Micropost を持つ User は1人なので、 function user() のように単数形 user でメソッドを定義する
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
