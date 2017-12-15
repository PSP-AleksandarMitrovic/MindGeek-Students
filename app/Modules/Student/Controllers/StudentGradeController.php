<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:26 PM
 */

namespace App\Modules\Student\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesCalculateContract;
use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesOutputContract;

/**
 * Class StudentGradeController
 * @package App\Modules\Student\Controllers
 */
class StudentGradeController extends Controller
{
    /**
     * StudentGradeController constructor.
     *
     * @param SchoolBoardGradesCalculateContract $calculatorService
     * @param SchoolBoardGradesOutputContract $outputService
     */
    public function __construct(SchoolBoardGradesCalculateContract $calculatorService,
                                SchoolBoardGradesOutputContract $outputService)
    {
        $this->calculator = $calculatorService;
        $this->calculator = $outputService;
    }

    /**
     * Calculate
     *
     * @param $id
     */
    public function calculate($id)
    {

    }
}