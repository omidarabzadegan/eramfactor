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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->enum('faceandtouch', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('wirless', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('bluetooth', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('vocerecord', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('camerafront', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('rearcamera', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('microphones', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('speacker', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('earspicker', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('proximitysensor', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('alssensor', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('touch', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('lcd', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('keys', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('vibrator', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('charging', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('callfunction', ['safe', 'not_checked' , 'broken'])->default('not_checked');
            $table->enum('onoff', ['safe', 'not_checked' , 'broken'])->default('not_checked');

            $table->string('password');

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
        Schema::dropIfExists('devices');
    }
};
