<?php
/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 2:46 PM
 */

namespace App\Modules\SchoolBoard\Services;


use App\Modules\SchoolBoard\Contracts\SchoolBoardGradesOutputContract;
use Illuminate\Contracts\Support\Arrayable;
use SoapBox\Formatter\Formatter;

class XMLGradesOutput implements SchoolBoardGradesOutputContract
{
    /**
     * Output student's data
     *
     * @param $data
     * @return mixed
     */
    public function output(Arrayable $data)
    {
        $formatter = Formatter::make($data->toArray(), Formatter::ARR);

        return response($formatter->toXml(), 200, [
            'Content-Type' => 'text/xml'
        ]);
    }
}