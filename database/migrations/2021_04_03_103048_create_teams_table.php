<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('team_name');
            $table->integer('user_id')->nullable(); //uniqueにすることで、1人のユーザーが一つのチームしか作成できなくなる
            $table->integer('amount_member')->nullable();
            $table->date('created_at');
            $table->char('home_studium');
            $table->date('updated_at');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
