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
        Schema::create('computers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('computer_name', 50); // Tên máy tính
            $table->string('model', 100); // Model
            $table->string('operating_system', 50); // Hệ điều hành
            $table->string('processor', 50); // Bộ vi xử lý
            $table->integer('memory'); // Bộ nhớ RAM (GB)
            $table->boolean('available'); // Trạng thái hoạt động (true/false)
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computers');
    }
};
