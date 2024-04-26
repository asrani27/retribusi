<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Los extends Model
{
    protected $table = 'los';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function blok()
    {
        return $this->belongsTo(Blok::class, 'blok_id');
    }
}
