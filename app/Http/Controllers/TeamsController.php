<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Team; //この行を上に追加
use App\User;//この行を上に追加
use Auth;//この行を上に追加
use Validator;//この行を上に追加

class TeamsController extends Controller
{
    //
    
    public function register(){
        return view ('teams_register');
    }
    
    public function index(){
        //投稿を全権取得
        $teams = Team::get(); //これをcount>0する

        return view ('teams',[
            'teams'=> $teams
            ]);
    }
    
    public function register_team(Request $request){
        //バリデーション 
        $validator = Validator::make($request->all(), [
            'team_name' => 'required|max:225'
        ]);
        //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        $teams = new Team;
        $teams->team_name = $request->team_name;
        $teams->user_id = Auth::id();//ここでログインしているユーザidを登録しています
        $teams->home_studium = $request->home_studium;
        $teams->description = $request->description;
        $teams->save();

        return redirect('/teams');
    }
    
    
}

