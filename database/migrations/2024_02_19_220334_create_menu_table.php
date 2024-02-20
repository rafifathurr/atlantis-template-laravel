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
        Schema::create('menu', function (Blueprint $table) {
            $table->string('menu_id', 3)->primary();
            $table->string('id_level', 3);
            $table->string('menu_name', 300);
            $table->string('menu_link', 300);
            $table->string('menu_icon', 300);
            $table->string('parent_id', 30)->nullable();
            $table->string('create_by', 30)->nullable();
            $table->date('create_date')->nullable();
            $table->string('delete_mark', 1)->nullable();
            $table->string('update_by', 30)->nullable();
            $table->timestamp('update_date')->nullable();

            $table->foreign('id_level')->references('id_level')->on('menu_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
