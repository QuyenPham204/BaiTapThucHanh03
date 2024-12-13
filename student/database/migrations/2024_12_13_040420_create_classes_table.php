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
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // id, primary key
            $table->enum('grade_level', ['Pre-K', 'Kindergarten']); // grade_level
            $table->string('room_number', 10); // room_number
            $table->timestamps(); // created_at, updated_at
        });
    }
};
