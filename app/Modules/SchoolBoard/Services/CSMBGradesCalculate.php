<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 3:16 PM
 */

namespace App\Modules\SchoolBoard\Services;


use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesCalculateContract;

class CSMBGradesCalculate implements SchoolBoardGradesCalculateContract
{
    /**
     * Calculate student average grade
     *
     * @param $student_id
     * @return mixed
     */
    public function calculate($student_id)
    {
        // TODO: Implement calculate() method.
    }

    /**
     * Check if students passes with average grades
     *
     * @return mixed
     */
    public function hasPassed()
    {
        // TODO: Implement hasPassed() method.
    }
}