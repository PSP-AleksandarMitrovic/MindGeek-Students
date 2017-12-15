<?php

namespace App\Modules\SchoolBoard\Models;

use App\Common\Models\BaseModel;

class SchoolBoard extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'output'
    ];
}
