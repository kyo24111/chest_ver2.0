<!-- resources/views/teams.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <a href='/teams_register'>チーム登録がまだの方</a>
    <!-- 全てのチームリスト -->
        @if (count($teams) > 0)
           <div class="card-body">
               <div class="card-body">
                   <table class="table table-striped task-table">
                       <!-- テーブルヘッダ -->
                       <thead>
                           <th>チーム名</th>
                           <th>代表者</th>
                           <th>本拠地</th>
                           <th>結成日</th>
                       </thead>
                       <!-- テーブル本体 -->
                       <tbody>
                           @foreach ($teams as $team)
                               <tr>
                                   <!-- チーム名 -->
                                   <td class="table-text">
                                       <div>{{ $team->team_name }}</div>
                                   </td>
                                    <!-- 代表者 -->
                                   <td class="table-text">
                                       <div>{{ $team->user_id }}</div>
                                   </td>
    				                <!-- 本拠地 -->
                                   <td class="table-text">
                                       <div>{{ $team->home_studium }}</div>
                                   </td>
                                   <!-- 結成日 -->
                                   <td class="table-text">
                                       <div>{{ $team->created_at }}</div>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>		
        @endif
   
@endsection