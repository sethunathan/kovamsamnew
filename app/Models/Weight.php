<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weight extends Model
{
    use SoftDeletes;
    protected $table = "weight";
       
    public $nameMaxLimit = 150;

    protected $fillable = [
        'name',
    ];
}
