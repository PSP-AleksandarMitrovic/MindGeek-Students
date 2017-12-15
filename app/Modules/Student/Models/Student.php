<?php

namespace App\Modules\Student\Models;

use App\Common\Models\BaseModel;

/**
 * Class Student
 * @package App\Modules\Student\Models
 */
class Student extends BaseModel
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
     * The model relations
     *
     * @var array
     */
    protected $modelRelations = [
        'grades',
        'schoolBoard'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function grades()
    {
        return $this->belongsToMany('App\Modules\Grade\Models\Grade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schoolBoard()
    {
        return $this->belongsTo('App\Modules\SchoolBoard\Models\SchoolBoard');
    }
}
