<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:33 PM
 */

namespace App\Modules\Student\Repositories;

use App\Common\Exceptions\MissingModel;
use App\Common\Exceptions\MissingRelation;
use App\Modules\Student\Contracts\RepositoryStudentContract;
use App\Modules\Student\Models\Student;

/**
 * Class RepositoryStudent
 * @package App\Modules\Student\Services
 */
class RepositoryStudent implements RepositoryStudentContract
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
     * @return mixed
     */
    public function getById(int $id) : Student
    {
        return $this->student->find($id);
    }

    /**
     * Get model with relations
     *
     * @param $id
     * @param $relationsLoad
     * @return mixed
     */
    public function getByIdWithRelations(int $id, array $relationsLoad) : Student
    {
        if(count($relationsLoad) == 0)
            throw new MissingRelation("Relation loaders not provided");

        $student = $this->student->find($id);

        if(!$student)
            throw new MissingModel("Student not found");

        return $student->load($relationsLoad);
    }

    /**
     * Get model's relation
     *
     * @param int $id
     * @param string $relation
     * @return mixed
     */
    public function getByIdRelation(int $id, string $relation)
    {
        if(!in_array($relation, $this->student->getModelRelations()))
            throw new MissingRelation("Not valid relation");

        $student = $this->student->find($id);

        if(!$student)
            throw new MissingModel("Student not found");

        return $student->{$relation};
    }
}