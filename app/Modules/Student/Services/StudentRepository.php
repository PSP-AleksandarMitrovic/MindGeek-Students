<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:33 PM
 */

namespace App\Modules\Student\Services;


use App\Modules\Student\Contracts\RepositoryStudentContract;
use App\Modules\Student\Models\Student;

/**
 * Class StudentRepository
 * @package App\Modules\Student\Services
 */
class StudentRepository implements RepositoryStudentContract
{
    /**
     * @var Student
     */
    private $student;

    /**
     * StudentRepository constructor.
     * @param $student
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Get model by primary key
     *
     * @param $id
     * @param array $relationsLoad
     * @param null $relation
     * @return mixed
     * @internal param array $relations
     */
    public function getById($id, $relationsLoad = [], $relation = null)
    {
        $student = $this->student->find($id);

        if($relation){
            return $student->{$relation};
        }

        if(count($relationsLoad) > 0){
            $student->load($relationsLoad);
        }

        return $student;
    }
}