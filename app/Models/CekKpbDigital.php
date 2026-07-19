<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CekKpbDigital extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * Cast ai_generated (jsonb) ke array PHP secara otomatis.
     */
    protected $casts = [
        'ai_generated' => 'array',
    ];

    protected $appends = ['motor'];

    /**
     * Ambil data motor berdasarkan 5 karakter pertama engine (kode nosin).
     */
    public function getMotorAttribute()
    {
        $kode_nosin = substr($this->engine, 0, 5);
        return Motor::whereRaw('kode_nosin ILIKE ?', ['%' . $kode_nosin . '%'])->first();
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
