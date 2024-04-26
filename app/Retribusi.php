<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retribusi extends Model
{
    protected $table = 'retribusi';
    protected $guarded = ['id'];
    public function pedagang()
    {
        return $this->belongsTo(Pedagang::class, 'pedagang_id');
    }
    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }
}
