<?php

namespace App\Http\Controllers;

use App\Models\first;
use App\Models\second;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\memberlist;
use PhpParser\Node\Expr\PostDec;
use App\Models\Post;

class MyController extends Controller
{
    //
    public function display(){
        $seconds = first::all()->toArray();
            return view('first.display',compact('seconds'));
    }
    public function index(){
        $users = DB::select('select * from seconds');
        return view('welcome',['users'=>$users  ]);
    }
    public function show(){
         return memberlist::all();
         return  view('php') ;
    }
    public function saveItem(Request $request){
//::info(json_encode($request->all()));
        $second = new second;
        $second->name =$request->name;
        $second->password= $request->password;
        $second->save();
        return view('welcome');
        //dd($request->name);
    }
    public function test(){
        $seconds =second::orderBy('id','desc')->get();

        return view('php',['seconds'=>$seconds]);

    }

    // public function index2(){
    //  //   $seconds = first::all()->toArray();
    //     $posts = Post::all();
    //         return view('post.index',compact('posts','posts'));
    //         dd($posts);
    // };

//     public function index3(){
//         //   $seconds = first::all()->toArray();
//         $posts = Post::all();

//         dd($posts);
//     }
// }
}
?>
