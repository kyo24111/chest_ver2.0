<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Userテーブルとのリレーション （主テーブル側）
    public function user() {
        return $this->hasMany('App\User');
    }
}
