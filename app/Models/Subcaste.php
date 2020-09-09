<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcaste extends Model
{
    use SoftDeletes;
    protected $table = "subcaste";
    public $nameMaxLimit = 100;

    protected $fillable = [
        'name',
        'caste_id',
    ];

    public function caste()
    {
        return $this->belongsTo(Caste::class, 'caste_id', 'id');
    }
}
