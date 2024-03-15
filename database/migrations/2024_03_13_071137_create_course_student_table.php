<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->foreignId('course_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->boolean('is_access')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_student');
    }
};
