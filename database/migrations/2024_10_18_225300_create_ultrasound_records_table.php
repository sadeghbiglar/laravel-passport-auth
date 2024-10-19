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
        Schema::create('ultrasound_records', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name'); // نام بیمار
            $table->string('national_id', 10)->unique(); // کد ملی بیمار
            $table->string('phone_number', 15); // شماره تلفن بیمار
            $table->string('exam_type'); // نوع سونوگرافی
            $table->date('exam_date'); // تاریخ معاینه
            $table->integer('gestational_age')->nullable(); // سن بارداری برحسب هفته
            $table->float('fetal_heart_rate')->nullable(); // ضربان قلب جنین
            $table->float('amniotic_fluid_index')->nullable(); // شاخص مایع آمنیوتیک
            $table->text('comments')->nullable(); // توضیحات اضافی
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ultrasound_records');
    }
};
