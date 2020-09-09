<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Language
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Language onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Language withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Language withoutTrashed()
 * @mixin \Eloquent
 */
class Income extends Model
{
    use SoftDeletes;
    protected $table = "income";
    public $nameMaxLimit = 150;

    protected $fillable = [
        'name',
    ];
}
