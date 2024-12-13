<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('title'); // Tên sách
        $table->string('author'); // Tác giả
        $table->year('publication_year'); // Năm xuất bản
        $table->string('genre'); // Thể loại
        $table->unsignedBigInteger('library_id'); // Khóa ngoại đến Library

        // Ràng buộc khóa ngoại
        $table->foreign('library_id')->references('id')->on('libraries')->onDelete('cascade');

        $table->timestamps(); // Thời gian tạo/cập nhật
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
