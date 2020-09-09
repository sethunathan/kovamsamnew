<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caste extends Model
{
    use SoftDeletes;
    protected $table = "caste";
   
    public $nameMaxLimit = 100;

    protected $fillable = [
        'name',
        'religion_id',
    ];

    public function religion()
    {
        return $this->belongsTo(Religion::class, 'religion_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'state_id', 'id');
    }
}
