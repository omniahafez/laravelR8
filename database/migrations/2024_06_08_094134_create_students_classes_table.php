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
        Schema::create('student_classes', function (Blueprint $table) {
            $table->foreignId('class_id')->constrained('school_classes');
            $table->foreignId('student_id')->constrained('students');
            $table->timestamps();

            $table->primary(['class_id', 'student_id']); // same student cannot be enrolled in the same class more than once.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_classes');
    }
};
