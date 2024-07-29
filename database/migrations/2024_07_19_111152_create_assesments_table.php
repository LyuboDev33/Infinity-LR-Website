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
        Schema::create('assesments', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_user');
            $table->string('email_of_user');
            $table->string('phone_number_of_user');
            $table->string('industry_knowledge');
            $table->string('industry_experience');
            $table->string('description');
            $table->string('current_position');
            $table->string('montly_income');
            $table->string('money_useage');
            $table->string('accomplish_job');
            $table->string('6_months');
            $table->string('12_months');
            $table->string('hours_daily');
            $table->string('priority');
            $table->string('occupation');
            $table->string('are_you_ready');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesments');
    }
};
