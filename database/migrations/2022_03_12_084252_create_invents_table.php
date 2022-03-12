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
        Schema::create('invents', function (Blueprint $table) {
            $table->id();
            $table->string('inames');
            $table->string('icode')->nullable();
            $table->string('iserial')->nullable();
            $table->string('iprocessor');
            $table->string('ihddc');
            $table->string('ihddh');
            $table->string('iwin');
            $table->string('iram');
            $table->string('icomment');
            $table->string('inextm');
            $table->string('upsinfo');
            $table->unsignedBigInteger('stId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('insId');
            $table->unsignedBigInteger('depId');
            $table->foreign('stId')->references('id')->on('statuses')->onDelete('CASCADE');
            $table->foreign('userId')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('insId')->references('id')->on('institutions')->onDelete('CASCADE');
            $table->foreign('depId')->references('id')->on('departments')->onDelete('CASCADE');
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
        Schema::dropIfExists('invents');
    }
};
