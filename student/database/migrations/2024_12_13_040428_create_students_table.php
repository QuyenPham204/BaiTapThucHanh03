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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // id, primary key
            $table->string('first_name', 50); // first_name
            $table->string('last_name', 50); // last_name
            $table->date('date_of_birth'); // date_of_birth
            $table->string('parent_phone', 20); // parent_phone
            $table->unsignedBigInteger('class_id'); // Foreign key
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade'); // Reference classes.id
            $table->timestamps(); // created_at, updated_at
        });
    }
};
