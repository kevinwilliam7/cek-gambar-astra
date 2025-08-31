<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AstraWebc extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
