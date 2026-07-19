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

    protected $appends = ['motor', 'astra_webc'];

    /**
     * Ambil data motor berdasarkan 5 karakter pertama engine (kode nosin).
     */
    public function getMotorAttribute()
    {
        $kode_nosin = substr($this->engine, 0, 5);
        return Motor::whereRaw('kode_nosin ILIKE ?', ['%' . $kode_nosin . '%'])->first();
    }

    /**
     * Relasi ke AstraWebc berdasarkan engine (nomor_mesin).
     */
    public function astraWebcs()
    {
        return $this->hasMany(AstraWebc::class, 'nomor_mesin', 'engine');
    }

    /**
     * Accessor untuk mendapatkan AstraWebc yang cocok dengan service_id (kpb_type).
     */
    public function getAstraWebcAttribute()
    {
        $kpbType = 'KPB' . $this->service_id;
        
        // Cari dari collection yang di-eagerload jika ada
        if ($this->relationLoaded('astraWebcs')) {
            return $this->astraWebcs->first(fn ($w) => $w->kpb_type === $kpbType);
        }

        // Fallback jika tidak di-eagerload
        return $this->astraWebcs()->where('kpb_type', $kpbType)->first();
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


