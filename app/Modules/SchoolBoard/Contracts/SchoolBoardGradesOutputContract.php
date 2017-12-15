<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:53 PM
 */

namespace App\Modules\SchoolBoard\Contracts;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Interface SchoolBoardGradesOutputContract
 * @package App\Modules\SchoolBoard\Contracts
 */
interface SchoolBoardGradesOutputContract
{
    /**
     * Output student's data
     *
     * @param $data
     * @return mixed
     */
    public function output(Arrayable $data);
}