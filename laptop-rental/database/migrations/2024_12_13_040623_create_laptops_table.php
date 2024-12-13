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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('brand'); // Hãng sản xuất
            $table->string('model'); // Mẫu laptop
            $table->text('specifications'); // Thông số kỹ thuật
            $table->boolean('rental_status')->default(false); // Trạng thái cho thuê
            $table->unsignedBigInteger('renter_id')->nullable(); // Khóa ngoại, có thể null
    
            // Khóa ngoại
            $table->foreign('renter_id')->references('id')->on('renters')->onDelete('set null');
    
            $table->timestamps(); // Thời gian tạo/cập nhật
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
