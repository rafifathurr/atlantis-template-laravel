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
        Schema::create('user', function (Blueprint $table) {
            $table->string('id_user', 30)->primary()->unique();
            $table->string('nama_user', 60);
            $table->string('username', 60)->unique();
            $table->string('password', 60)->unique();
            $table->string('email', 200)->unique();
            $table->string('no_hp', 30)->unique();
            $table->string('wa', 30)->unique();
            $table->string('pin', 30)->unique();
            $table->string('id_jenis_user', 3)->unique();
            $table->string('status_user', 30);
            $table->string('delete_mark', 1)->nullable();
            $table->string('create_by', 30)->nullable();
            $table->timestamp('create_date')->nullable();
            $table->string('update_by', 30)->nullable();
            $table->timestamp('update_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
