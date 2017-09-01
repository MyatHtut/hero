<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\src\transform\LessonTransformer;
use Mockery\CountValidator\Exception;


class FractalController extends apiController
{
    protected $lessonTransformer;

    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;

    }

    public function index()
    {
        $lesson = Lesson::all();
        return Response::json(['data' => $this->lessonTransformer->transformerCollection($lesson->all())], 200);

    }
}
