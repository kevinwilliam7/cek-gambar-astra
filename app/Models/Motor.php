<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motor extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function kpb_kriteria()
    {
        return $this->hasMany(KpbKriteria::class, 'kode_nosin', 'kode_nosin');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
