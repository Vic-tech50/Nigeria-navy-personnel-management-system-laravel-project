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
        Schema::create('take_a_leaves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('employeeId');
            $table->string('purpose');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('take_a_leaves');
    }
};
