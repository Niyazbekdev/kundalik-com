<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->boolean('first')->default(false);
            $table->boolean('second')->default(false);
            $table->boolean('third')->default(false);
            $table->boolean('fourth')->default(false);
            $table->boolean('fifth')->default(false);
            $table->boolean('sixth')->default(false);
            $table->boolean('seventh')->default(false);
            $table->boolean('eighth')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
