<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('identity')->unique(); // mã nhân viên
            $table->string('fullname');
            $table->date('date_of_birth')->nullable(); 
            $table->string('common_name')->nullable(); // tên thường gọi
            $table->integer('gender')->default(1);
            $table->string('identity_card')->unique(); // cccd
            $table->date('start_working_date'); // ngayfd bắt đầu làm việc
            $table->date('official_start_working_date'); // ngày chính thức làm việc
            $table->integer('working_status')->default(1);
            $table->string('current_address'); // địa chỉ hiện tại
            $table->string('permanent_address'); //địa chỉ thường trú
            $table->string('domicile'); // nguyên quán
            $table->string('place_of_birth'); // nơi sinh
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('decision_number'); // số quyết định
            $table->date('decision_date'); // ngày quyết định
            $table->string('postion'); // vị trí làm việc
            $table->string('title'); // chức danh
            $table->string('department');
            $table->string('contract_number'); // số hợp đồng
            $table->string('contract_type'); // loại hợp đồng
            $table->date('contract_start')->nullable();
            $table->date('contract_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
