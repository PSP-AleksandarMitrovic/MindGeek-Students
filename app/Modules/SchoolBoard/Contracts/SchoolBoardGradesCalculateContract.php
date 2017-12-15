<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:48 PM
 */

namespace App\Modules\SchoolBoard\Contracts;


/**
 * Interface SchoolBoardGradesCalculateContract
 * @package App\Modules\SchoolBoard\Contracts
 */
interface SchoolBoardGradesCalculateContract
{
    /**
     * Calculate student average grade
     *
     * @param $student_id
     * @return mixed
     */
    public function calculate($student_id);

    /**
     * Check if students passes with average grades
     *
     * @return mixed
     */
    public function hasPassed();

}