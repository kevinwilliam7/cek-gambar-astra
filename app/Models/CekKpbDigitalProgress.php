<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CekKpbDigitalProgress extends Model
{
    protected $table = 'cek_kpb_digital_progress';
    protected $guarded = [];

    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
