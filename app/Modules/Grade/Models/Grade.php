<?php

namespace App\Modules\Grade\Models;

use App\Common\Models\BaseModel;

class Grade extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade'
    ];
}
