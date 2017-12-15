<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 6:48 PM
 */

namespace App\Modules\SchoolBoard\Services;

use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesCalculateContract;
use App\Modules\Student\Models\Student;

abstract class BaseGradesCalculate implements SchoolBoardGradesCalculateContract
{
    /**
     * @var bool
     */
    protected $hasPassed;

    /**
     * Calculate student average grade
     *
     * @param Student $student
     * @return float
     */
    public function calculate(Student $student) : float
    {
        $avg = $student->grades->pluck('grade')->avg();

        if($avg > 7){
            $this->hasPassed = true;
        }else{
            $this->hasPassed = false;
        }

        return $avg;
    }

    /**
     * Check if students passes with average grades
     *
     * @return mixed
     */
    public function hasPassed() : bool
    {
        return $this->hasPassed;
    }
}