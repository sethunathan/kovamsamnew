<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;
    protected $table = "place";
    public $nameMaxLimit = 150;

    protected $fillable = [
        'name',
    ];
}
