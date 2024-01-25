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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->enum('stock',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('production',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('acopio',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('priceclosing',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('hss',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('his',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('acs',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('ars',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('cs',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('exp',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->bigInteger('industry_id');
            $table->bigInteger('period_id');
            $table->integer('year');
            $table->bigInteger('configuration_id');
            $table->string('observation')->nullable();
            $table->enum('status',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
