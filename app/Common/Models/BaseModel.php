<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 5:18 PM
 */

namespace App\Common\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Common\Models
 */
class BaseModel extends Model
{
    /**
     * The model relations
     *
     * @var array
     */
    protected $modelRelations = [];

    /**
     * Return all model's available relations
     *
     * @return array
     */
    public function getModelRelations()
    {
        return $this->modelRelations;
    }
}