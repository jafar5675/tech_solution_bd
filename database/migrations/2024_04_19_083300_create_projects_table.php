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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('project_name')->nullable();
            $table->string('short_title')->nullable();
            $table->string('short_description')->nullable();
            $table->string('client')->nullable();
            $table->string('category')->nullable();
            $table->string('service')->nullable();
            $table->string('web')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('deployment')->nullable();
            $table->text('challenge')->nullable();
            $table->text('result')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};