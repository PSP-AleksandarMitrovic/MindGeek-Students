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

/**
 * Class CalculateStudentsGrades
 * @package App\Modules\Student\Services
 */
class CalculateStudentsGrades
{
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
     * @param RepositoryStudent $studentRepository
     * @param CUDStudent $cudStudent
     */
    public function __construct(SchoolBoardGradesCalculateContract $calculatorService,
                                RepositoryStudent $studentRepository,
                                CUDStudent $cudStudent)
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
        // Todo

        return [];
    }
}