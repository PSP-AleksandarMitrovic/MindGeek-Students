<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 1:58 PM
 */

namespace App\Modules\SchoolBoard\Services;


use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesOutputContract;
use Illuminate\Contracts\Support\Arrayable;

class JSONGradesOutput implements SchoolBoardGradesOutputContract
{
    /**
     * Output student's data
     *
     * @param $data
     * @return mixed
     */
    public function output(Arrayable $data)
    {
        return response()->json($data->toArray());
    }
}