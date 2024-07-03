<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    protected $table = 'pedagang';
    protected $guarded = ['id'];
    public $timestamps = false;
    public function blok()
    {
        return $this->belongsTo(Blok::class, 'blok_id');
    }
}
