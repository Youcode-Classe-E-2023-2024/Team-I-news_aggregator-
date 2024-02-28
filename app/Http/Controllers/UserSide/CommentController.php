<?php

namespace App\Http\Controllers\UserSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemComment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = ItemComment::create([
            'item_id' => $request->item_id,
            'msg' => $request->msg,
        ]);

        return response()->json($comment);
    }
}
