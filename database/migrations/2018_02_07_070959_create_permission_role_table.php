<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('PermissionRoleId');
            $table->integer('PermissionId')->unsigned()->nullable();
            $table->foreign('PermissionId')->references('PermissionId')->on('permission')
                    ->onDelete('restrict')->onUpdate('cascade');
            
            $table->integer('RoleId')->unsigned()->nullable();
            $table->foreign('RoleId')->references('RoleId')->on('role')
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
        Schema::dropIfExists('permission_role');
    }
}
