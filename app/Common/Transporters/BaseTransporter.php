<?php

namespace App\Common\Transporters;

use Illuminate\Contracts\Support\Arrayable;

/**
 * Created by PhpStorm.
 * User: Backend
 * Date: 12/15/2017
 * Time: 6:12 PM
 */
class BaseTransporter implements Arrayable
{
    /**
     * Set all entity properties
     *
     * @param array $data
     */
    public function set(array $data)
    {
        if(count($data) == 0)
            return;

        foreach($data as $property => $value)   {
            if(property_exists($this, $property))
                $this->{$property} = $value;
        }
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return (array)$this;
    }
}