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
        Schema::create('i_error_application', function (Blueprint $table) {
            $table->integer('error_id')->autoIncrement();
            $table->string('id_user', 30);
            $table->date('error_date');
            $table->string('modules', 100);
            $table->string('controller', 200);
            $table->string('function', 200);
            $table->string('error_line', 30);
            $table->string('error_message', 1000);
            $table->string('status', 30);
            $table->string('param', 300);
            $table->string('create_date', 30)->nullable();
            $table->timestamp('create_time')->nullable();
            $table->string('delete_mark', 1)->nullable();
            $table->string('update_by', 30)->nullable();
            $table->timestamp('update_date')->nullable();

            $table->foreign('id_user')->references('id_user')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_error_application');
    }
};
