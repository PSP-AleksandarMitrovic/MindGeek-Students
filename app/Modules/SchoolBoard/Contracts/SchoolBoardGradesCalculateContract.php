<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:48 PM
 */

namespace App\Modules\SchoolBoard\Contracts;

use App\Modules\Student\Models\Student;

/**
 * Interface SchoolBoardGradesCalculateContract
 * @package App\Modules\SchoolBoard\Contracts
 */
interface SchoolBoardGradesCalculateContract
{
    /**
     * Calculate student average grade
     *
     * @param Student $student
     * @return mixed
     * @internal param $student_id
     */
    public function calculate(Student $student);

    /**
     * Check if students passes with average grades
     *
     * @return mixed
     */
    public function hasPassed();

}