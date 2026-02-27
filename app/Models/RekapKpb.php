<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RekapKpb extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function ahass()
    {
        return $this->hasOne(Ahass::class, 'kode_ahass', 'ahass_code');
    }
}
