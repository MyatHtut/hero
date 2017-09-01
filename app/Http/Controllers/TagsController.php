<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Tag;
use Illuminate\Http\Request;
use App\src\transform\TagTransformer;
use Illuminate\Support\Facades\Response;
use Mockery\CountValidator\Exception;

class TagsController extends apiController
{
    protected $tagTransformer;

    /**
     * TagsController constructor.
     * @param $tagTransformer
     */
    public function __construct(TagTransformer $tagTransformer)
    {
        $this->tagTransformer = $tagTransformer;
    }

    public function index($lessonID = null)
    {
        $tags = $this->getTags($lessonID);

        return Response::json(['data' => $this->tagTransformer->transformerCollection($tags->all())], 200);

    }

    /**
     * @param $lessonID
     * @return \Illuminate\Database\Eloquent\Collection|mixed|static[]
     */
    private function getTags($lessonID)
    {

        $tags = $lessonID ? Lesson::find($lessonID)->tags : Tag::all();
        return $tags;
    }

}
