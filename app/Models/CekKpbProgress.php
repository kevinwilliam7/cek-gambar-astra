<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CekKpbProgress extends Model
{
    protected $guarded = [];

    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
