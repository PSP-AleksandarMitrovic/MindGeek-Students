<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 3:16 PM
 */

namespace App\Modules\SchoolBoard\Services;


use App\Modules\Student\Models\Student;

/**
 * Class CSMBGradesCalculate
 * @package App\Modules\SchoolBoard\Services
 */
class CSMBGradesCalculate extends BaseGradesCalculate
{
    /**
     * Calculate student average grade
     *
     * @param Student $student
     * @return mixed
     */
    public function calculate(Student $student): float
    {
        if ($student->grades->count() > 2)
            $this->removeLowestGrade($student);
        return parent::calculate($student);
    }

    /**
     * @param Student $student
     */
    public function removeLowestGrade(Student $student)
    {
        $min = $student->grades->first()->grade;
        $min_key = 0;
        foreach ($student->grades as $key => $grade) {
            if ($grade->grade < $min) {
                $min = $grade->grade;
                $min_key = $key;
            }
        }

        unset($student->grades[$min_key]);
    }
}