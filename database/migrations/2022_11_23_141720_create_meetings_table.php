<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id(); 
            $table->string('reference');
            $table->string('client');
            $table->string('subclient');
            $table->string('title');
            $table->string('room');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('privacy');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('interpretation');
            $table->string('resources');
            $table->string('status');
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
        Schema::dropIfExists('meetings');
    }
};
