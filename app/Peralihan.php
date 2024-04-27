<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peralihan extends Model
{
    protected $table = 'peralihan';
    public function pedagang_lama()
    {
        return $this->belongsTo(Pedagang::class, 'pedagang_lama');
    }
    public function pedagang_baru()
    {
        return $this->belongsTo(Pedagang::class, 'pedagang_baru');
    }
}
