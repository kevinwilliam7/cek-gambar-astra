<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function cek_kpb_progress()
    {
        return $this->hasOne(CekKpbProgress::class, 'job_id', 'id');
    }
}
