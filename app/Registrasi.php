<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi';
    public function pedagang()
    {
        return $this->belongsTo(Pedagang::class, 'pedagang_id');
    }
}
