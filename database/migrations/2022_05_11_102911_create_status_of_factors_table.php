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
        Schema::create('status_of_factors', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['entrance' , 'under_repaired' , 'repaired' , 'delivered' ])->default('entrance');

            $table->unsignedBigInteger('factor_id');
            $table->foreign('factor_id')->references('id')->on('factors')
            ->onDelete('cascade');
            
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
        Schema::dropIfExists('status_of_factors');
    }
};
