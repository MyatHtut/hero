<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\src\transform\LessonTransformer;
use Mockery\CountValidator\Exception;
use respond;


class LessonConroller extends apiController
{
    protected $lessonTransformer;

    /**
     * LessonConroller constructor.
     * @param $lessonTransformer
     */
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;

    }

    public function index()
    {
        $limit = Input::get('limit') ?: 3;
        $lesson = Lesson::paginate($limit);
//        dd($lesson);
        return $this->responsePage($lesson,[
            'data'=>$this->lessonTransformer->transformerCollection($lesson->all())
        ]);

    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return Response::json([
                'error' => [
                    'messsage' => 'Error',
                    'code' => 404,
                ],

            ], 404);

        }
        return Response::json(['data' => $lesson], 200);

    }

    public function store()
    {
        try {
            if (!Input::get('name')) {
                return $this->errorResponse("Error COnd");
            }

        } catch (Exception $e) {
            return $e;
        }

        return "hello";
    }

    /**
     * @param $lesson
     * @return mixed
     */
    private function responsePage($lesson, $data)
    {

        $data = array_merge([
            "pageInfo" => [
                'currentpage' => $lesson->perPage(),
                'total_count' => $lesson->total(),
                'total_page' => ceil($lesson->total() / $lesson->perPage()),
                'url' => $lesson->nextPageUrl(),
            ],
        ],$data);
        return response($data);
    }


}
