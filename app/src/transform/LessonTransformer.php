<?php

/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 8/26/17
 * Time: 2:32 PM
 */
namespace App\src\transform;
class LessonTransformer extends Transformer
{


    public function transformer($lesson)
    {

        return [
            'id' => $lesson['id'],
            'title' => $lesson['name'],
            'body' => $lesson['body'],
        ];

    }
}