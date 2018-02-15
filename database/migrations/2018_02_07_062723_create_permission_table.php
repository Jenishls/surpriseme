<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('permission');
        Schema::enableForeignKeyConstraints();
        
        Schema::create('permission', function (Blueprint $table) {
            $table->increments('PermissionId');
            $table->integer('PageId')->unsigned()->nullable();
            $table->foreign('PageId')->references('PageId')->on('Page')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->string('Permission');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('permission');
        Schema::enableForeignKeyConstraints();
    }
}
