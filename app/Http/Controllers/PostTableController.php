<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\seconds;
use Illuminate\Http\Request;

class PostTableController extends Controller{
    public function index(){
        $second=seconds::all();
        return view('post.index',compact('second','second'));
    }
    // 
}
