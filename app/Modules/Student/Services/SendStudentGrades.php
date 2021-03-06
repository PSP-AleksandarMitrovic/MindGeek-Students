<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 3:18 PM
 */

namespace App\Modules\Student\Services;


use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesOutputContract;
use Illuminate\Contracts\Support\Arrayable;

/**
 * Class SendStudentGrades
 * @package App\Modules\Student\Services
 */
class SendStudentGrades
{
    /**
     * @var SchoolBoardGradesOutputContract
     */
    private $outputService;

    /**
     * StudentGradeController constructor.
     *
     * @param SchoolBoardGradesOutputContract $outputService
     */
    public function __construct(SchoolBoardGradesOutputContract $outputService)
    {
       $this->outputService = $outputService;
    }

    public function send(Arrayable $data)
    {
        return $this->outputService->output($data);
    }
}