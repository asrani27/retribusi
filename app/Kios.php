<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kios extends Model
{
    protected $table = 'kios';
    protected $guarded = ['id'];
    public $timestamps = false;
    
    public function blok()
    {
        return $this->belongsTo(Blok::class, 'blok_id');
    }
}
