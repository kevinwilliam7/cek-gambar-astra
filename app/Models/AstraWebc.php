<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AstraWebc extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function ahass()
    {
        return $this->belongsTo(Ahass::class, 'kode_ahass', 'kode_ahass');
    }
}
