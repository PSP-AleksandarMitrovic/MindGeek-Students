<?php

namespace App\Modules\Student\Transporters;

use App\Common\Transporters\BaseTransporter;

/**
 * Class StudentResult
 */
class StudentResult extends BaseTransporter
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var array
     */
    public $grades;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $passed;

    /**
     * @var float
     */
    public $averageGrade;
}