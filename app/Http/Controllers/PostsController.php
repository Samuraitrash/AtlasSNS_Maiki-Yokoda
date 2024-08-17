<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Authファサードを読み込むそう
use App\user;
use App\post;



class PostsController extends Controller
{
    //
    public function index(){
        $list=post::get();
        return view('posts.index',['list'=>$list]);
    }

    public function postContents(Request $request){
        //バリデーション設定
        $validator = $request->validate([
            'post' => ['required', 'string', 'max:150', 'min:1'],
        ]);
        $post=$request->input('post');
        $user_id = Auth::user()->id;
        dd($user_id);//処理ができているか確認

        post::create([
            'user_id'=>$user_id,
            'post'=>$post
        ]);
        return redirect('/top');
    }

}
