<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 3:18 PM
 */

namespace App\Modules\Student\Services;


/**
 * Class CalculateStudentsGrades
 * @package App\Modules\Student\Services
 */
use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesCalculateContract;
use App\Modules\Student\Contracts\CUDStudentContract;
use App\Modules\Student\Contracts\RepositoryStudentContract;

/**
 * Class CalculateStudentsGrades
 * @package App\Modules\Student\Services
 */
class CalculateStudentsGrades
{
    /**
     * @var
     */
    private $data;
    /**
     * @var SchoolBoardGradesCalculateContract
     */
    private $calculatorService;

    /**
     * @var RepositoryStudent
     */
    private $studentRepository;

    /**
     * @var CUDStudent
     */
    private $cudStudent;

    /**
     * StudentGradeController constructor.
     *
     * @param SchoolBoardGradesCalculateContract $calculatorService
     * @param RepositoryStudentContract $studentRepository
     * @param CUDStudentContract $cudStudent
     */
    public function __construct(SchoolBoardGradesCalculateContract $calculatorService,
                                RepositoryStudentContract $studentRepository,
                                CUDStudentContract $cudStudent)
    {
        $this->calculatorService = $calculatorService;
        $this->studentRepository = $studentRepository;
        $this->cudStudent = $cudStudent;
    }

    /**
     * Calculate data
     *
     * @param $student_id
     * @return $this
     */
    public function calculate($student_id)
    {
        // Todo

        return $this;
    }

    /**
     * Get calculated data
     */
    public function get()
    {
        return $this->data;
    }
}