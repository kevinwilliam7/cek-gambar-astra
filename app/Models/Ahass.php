<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ahass extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $table = 'ahass';
}
