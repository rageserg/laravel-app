<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\AddNewComment;
use Illuminate\Http\Request;

use Validator;

use App\Http\Requests\Comment\CreateRequest;


class CommentController extends Controller
{
    public function store (CreateRequest $request) {

        AddNewComment::dispatch($request['subject'], $request['body'], $request['article_id']);

        return response()->json([
            'status' => 'success',
        ], 201);


    }
}
