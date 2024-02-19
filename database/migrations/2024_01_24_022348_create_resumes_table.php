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
            $table->Integer('year');
            $table->Integer('month');
            $table->tinyInteger('biweekly');
            $table->bigInteger('period_id');
            $table->enum('status',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->enum('acopio',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('acopio_tm')->nullable();
            $table->enum('priceclosing',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('priceclosing_tm')->nullable();
            $table->double('priceclosing_usd')->nullable();
            $table->enum('hss',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('hss_tm')->nullable();
            $table->double('hss_usd')->nullable();
            $table->enum('cs',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('cs_tm')->nullable();
            $table->double('cs_usd')->nullable();
            $table->enum('acs',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('acs_tm')->nullable();
            $table->double('acs_usd')->nullable();
            $table->enum('ars',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('ars_tm')->nullable();
            $table->double('ars_usd')->nullable();
            $table->enum('his',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('his_tm')->nullable();
            $table->double('his_usd')->nullable();
            $table->enum('exp',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('exp_tm')->nullable();
            $table->double('exp_usd')->nullable();
            $table->enum('stock',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('stock_hss')->nullable();
            $table->double('stock_cs')->nullable();
            $table->double('stock_acs')->nullable();
            $table->double('stock_ars')->nullable();
            $table->double('stock_his')->nullable();
            $table->double('stock_exp')->nullable();
            $table->enum('production',['pendiente','completado','retraso', 'observado'])->nullable();
            $table->double('production_hss')->nullable();
            $table->double('production_cs')->nullable();
            $table->double('production_acs')->nullable();
            $table->double('production_ars')->nullable();
            $table->double('production_his')->nullable();
            $table->double('production_exp')->nullable();
            $table->bigInteger('industry_id');
            $table->bigInteger('configuration_id');
            $table->string('observation')->nullable();
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
