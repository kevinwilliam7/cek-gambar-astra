<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CekKpb extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $appends = ['motor'];

    public function getMotorAttribute()
    {
        $kode_nosin = substr($this->engine, 0, 5);
        return Motor::whereRaw('kode_nosin ILIKE ?', ['%' . $kode_nosin . '%'])->first();
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
