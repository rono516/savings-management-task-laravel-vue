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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); //member_number
            $table->string('name');
            $table->integer('id_number');
            $table->string('phone_number');
            $table->string('email');
            $table->timestamps();

            //  ['name', 'id_number', 'phone_number', 'email', 'member_number'];
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
