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
use App\Modules\Student\Contracts\RepositoryStudentContract;
use App\Modules\Student\Transporters\StudentResult;

/**
 * Class CalculateStudentsGrades
 * @package App\Modules\Student\Services
 */
class CalculateStudentsGrades
{
    /**
     * @var StudentResult
     */
    private $result;
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
     * StudentGradeController constructor.
     *
     * @param SchoolBoardGradesCalculateContract $calculatorService
     * @param RepositoryStudentContract $studentRepository
     * @param StudentResult $result
     */
    public function __construct(SchoolBoardGradesCalculateContract $calculatorService,
                                RepositoryStudentContract $studentRepository,
                                StudentResult $result)
    {
        $this->calculatorService = $calculatorService;
        $this->studentRepository = $studentRepository;
        $this->result = $result;
    }

    /**
     * Calculate data
     *
     * @param $student_id
     * @return $this
     */
    public function calculate($student_id)
    {
        $student = $this->studentRepository->getByIdWithRelations($student_id, ['grades']);

        $avg = $this->calculatorService->calculate($student);

        $hasPassed = $this->calculatorService->hasPassed();

        $this->result->set([
            "id" => $student->id,
            "name" => $student->name,
            "grades" => $student->grades->pluck("grade")->toArray(),
            "averageGrade" => $avg,
            "passed" => $hasPassed
        ]);

        return $this;
    }

    /**
     * Get calculated data
     */
    public function get()
    {
        return $this->result;
    }
}