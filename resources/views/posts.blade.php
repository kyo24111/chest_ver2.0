<!-- resources/views/posts.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            投稿フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 投稿フォーム -->
        @if( Auth::check() )
        <form action="{{ url('make_post') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- チーム名 -->
            <div class="form-group">
                チーム名
                <div class="col-sm-6">
                    <input type="char" name="poster_team" class="form-control">
                </div>
            </div>
            <!--　開催場所 -->
            <div class="form-group">
                開催場所
                <div class="col-sm-6">
                    <input type="char" name="field" class="form-control">
                </div>
            </div>
            <!--　日時 -->
            <div class="form-group">
                日時
                <div class="col-sm-6">
                    <input type="date" name="game_date" class="form-control">
                </div>
            </div>
            <!--　管理者メアド -->
            <div class="form-group">
                管理者メアド
                <div class="col-sm-6">
                    <input type="char" name="poster_mail" class="form-control">
                </div>
            </div>
            <!--　登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
        @endif
    </div>    
        @if (count($posts) > 0)
           <div class="card-body">
               <div class="card-body">
                   <table class="table table-striped task-table">
                       <!-- テーブルヘッダ -->
                       <thead>
                           <th>チーム名</th>
                           <th>代表者</th>
                           <th>メンバー数</th>
                           <th>試合日時</th>
                           <th>試合会場</th>
                           <th>投稿日</th>
                       </thead>
                       <!-- テーブル本体 -->
                       <tbody>
                           @foreach ($posts as $post)
                               <tr>
                                   <!-- チーム名 -->
                                   <td class="table-text">
                                       <div>{{ $post->poster_team }}</div>
                                   </td>
                                    <!-- 代表者 -->
                                   <td class="table-text">
                                       <div>{{ $post->user_name }}</div>
                                   </td>
                                   <!-- 所属人数 -->
                                   <td class="table-text">
                                       <div></div>
                                   </td>
                                   <!-- 試合日時 -->
                                   <td class="table-text">
                                       <div>{{ $post->game_date }}</div>
                                   </td>
    				                <!-- 試合会場 -->
                                   <td class="table-text">
                                       <div>{{ $post->field }}</div>
                                   </td>
                                   <!-- 投稿日-->
                                   <td class="table-text">
                                       <div>{{ $post->created_at }}</div>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>		
        @endif
    
    <!-- 全てのチームリスト -->
@endsection