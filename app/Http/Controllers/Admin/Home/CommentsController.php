<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    private  const  PATH = "admin_panel.pages.home.comments.";

    public function commentsShowList(){
        return view(self::PATH . "comments_show");
    }
    public function commentsShow(){
        return view(self::PATH . "comments_input");
    }

    public function commentsInput(){
        return redirect()->back();
    }
}
