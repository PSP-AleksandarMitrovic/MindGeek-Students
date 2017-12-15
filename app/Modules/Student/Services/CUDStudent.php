<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:30 PM
 */

namespace App\Modules\Student\Services;


use App\Modules\Student\Contracts\CUDStudentContract;
use App\Modules\Student\Models\Student;

/**
 * Class CUDStudent
 * @package App\Modules\Student\Services
 */
class CUDStudent implements CUDStudentContract
{
    /**
     * @var
     */
    private $student;

    /**
     * CUDStudent constructor.
     * @param $student
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return $this->student->create($data);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data)
    {
        // If Student is not found, throw 404
        $student = $this->student->findOrFail($id);

        $student->update($data);

        return $student->fresh();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        // If Image is not found, throw 404
        $student = $this->student->findOrFail($id);

        $student->delete();
    }
}