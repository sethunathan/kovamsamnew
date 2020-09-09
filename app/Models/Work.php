<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Work extends Model
{
    use SoftDeletes;
    protected $table = "work";
    public $nameMaxLimit = 150;

    protected $fillable = [
        'name',
    ];
}
