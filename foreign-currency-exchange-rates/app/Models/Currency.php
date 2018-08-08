<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];
}