<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/14/2017
 * Time: 3:27 PM
 */

namespace App\Common\Contracts;


/**
 * Interface RepositoryContract
 * @package App\Common\Contracts
 */
interface RepositoryContract
{
    /**
     * Get model by primary key
     *
     * @param $id
     * @return mixed
     * @internal param array $relations
     */
    public function getById(int $id);

    /**
     * Get model with relations
     *
     * @param $id
     * @param $relationsLoad
     * @return mixed
     */
    public function getByIdWithRelations(int $id, array $relationsLoad);

    /**
     * Get model's relation
     *
     * @param int $id
     * @param string $relation
     * @return mixed
     */
    public function getByIdRelation(int $id, string $relation);
}