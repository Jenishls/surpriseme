<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('RoleUserId');

            $table->integer('RoleId')->unsigned()->nullable();
            $table->foreign('RoleId')->references('RoleId')->on('Role')
                ->onDelete('restrict')->onUpdate('cascade');

            $table->integer('UserId')->unsigned()->nullable();
            $table->foreign('UserId')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('cascade');    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
