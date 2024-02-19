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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->date('date_reception')->nullable();//acopio,priceclosing
            $table->date('date_close')->nullable();//priceclosing
            $table->string('batch');
            $table->bigInteger('option_id');
            $table->bigInteger('industry_id');
            $table->bigInteger('period_id');
            $table->bigInteger('product_id')->nullable();
            $table->enum('status',['borrador','completado']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
