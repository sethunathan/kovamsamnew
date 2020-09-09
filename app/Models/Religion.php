<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Religion extends Model
{
    use SoftDeletes;
  
    public $nameMaxLimit = 100;
    public $shortNameMaxLimit = 3;
    protected $table = "religion";

    protected $fillable = [
        'name',
        'short_name' 
    ];

    public function caste()
    {
        return $this->hasMany(Caste::class, 'religion_id', 'id');
    }
}
