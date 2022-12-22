<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_table', function (Blueprint $table) {
            $table->id();
            $table->integer('amount')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('table_id');
            $table->foreign('table_id')->references('id')->on('tables');

            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_table');
    }
};
