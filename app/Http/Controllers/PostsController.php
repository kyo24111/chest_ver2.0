<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Team; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class PostsController extends Controller
{
    //
    public function index(){
        //投稿を全権取得
        $posts = Post::get(); //これをcount>0する
        
        return view ('posts',[
            'posts'=> $posts
            ]);
    }
    
    public function make_post(Request $request){
        //バリデーション 
        $validator = Validator::make($request->all(), [
            'poster_team' => 'required|max:225'
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $posts = new Post;
        $posts->poster_team = $request->poster_team;
        $posts->user_name = Auth::user()->name;//ここでログインしているユーザidを登録しています
        $posts->field = $request->field;
        $posts->game_date = $request->game_date;
        $posts->poster_mail = $request->poster_mail;
        $posts->save();
        return redirect('/posts');
    }
}
