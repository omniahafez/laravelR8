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
            $table->string('employeeName', 100);
            $table->string('phone', 25);
            $table->string('email', 100);
            $table->string('website', 100);
            $table->string('city', 30);
            $table->string('address', 100);
            $table->mediumInteger('salery');
            $table->boolean('active');
            $table->string('image', 100);
            $table->softDeletes();
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
