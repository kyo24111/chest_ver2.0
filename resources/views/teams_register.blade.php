<!-- resources/views/teams.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            チーム登録
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- チーム登録 -->
        @if( Auth::check() )
        <form action="{{ url('register_team') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- チーム名 -->
            <div class="form-group">
                チーム名
                <div class="col-sm-6">
                    <input type="char" name="team_name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                本拠地
                <div class="col-sm-6">
                    <input type="char" name="home_studium" class="form-control">
                </div>
            </div> 
            <div class="form-group">
                詳細
                <div class="col-sm-6">
                    <input type="text" name="description" class="form-control">
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
   
@endsection