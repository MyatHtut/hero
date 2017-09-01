<?php

/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 8/26/17
 * Time: 2:28 PM
 */
namespace App\src\transform;
abstract class Transformer
{
    public function transformerCollection(array $item)
    {
        return array_map([$this, 'transformer'], $item);
    }



}