<?php

/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 8/26/17
 * Time: 2:32 PM
 */
namespace App\src\transform;
class TagTransformer extends Transformer
{


    public function transformer($tag)
    {

        return [
            'id' => $tag['id'],
            'title' => $tag['name'],

        ];

    }
}