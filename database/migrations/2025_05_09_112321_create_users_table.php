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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->date('date_of_birth')->nullable(); // kalau kamu sudah mau langsung tambahkan
        $table->rememberToken();
        $table->timestamps();
    });
}


public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('date_of_birth');
    });
}

};