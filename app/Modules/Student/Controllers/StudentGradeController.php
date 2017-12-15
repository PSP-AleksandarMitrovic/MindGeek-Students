<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:26 PM
 */

namespace App\Modules\Student\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Student\Services\CalculateStudentsGrades;
use App\Modules\Student\Services\SendStudentGrades;
use RuntimeException;

/**
 * Class StudentGradeController
 * @package App\Modules\Student\Controllers
 */
class StudentGradeController extends Controller
{
    /**
     * @var CalculateStudentsGrades
     */
    private $calculatorService;

    /**
     * @var SendStudentGrades
     */
    private $outputService;

    /**
     * StudentGradeController constructor.
     *
     * @param CalculateStudentsGrades $calculatorService
     * @param SendStudentGrades $outputService
     */
    public function __construct(CalculateStudentsGrades $calculatorService,
                                SendStudentGrades $outputService)
    {
        $this->calculatorService = $calculatorService;
        $this->outputService = $outputService;
    }

    /**
     * Send student's report
     *
     * @param $id
     * @return string
     */
    public function sendReport($id)
    {
        try {
            $data = $this->calculatorService->calculate($id)->get();

            return $this->outputService->send($data);

        } catch (RuntimeException $e) {
            return $e->getMessage();
        }
    }
}