<?php

namespace App\Modules\Student\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @package App\Modules\Student\Models
 */
class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'school_board_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function grades()
    {
        return $this->belongsToMany('App\Modules\Grade\Models\Grade');
    }
}
