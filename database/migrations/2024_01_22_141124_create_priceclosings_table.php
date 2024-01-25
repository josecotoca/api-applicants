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
        Schema::create('priceclosings', function (Blueprint $table) {
            $table->id();
            $table->enum('regimen',['RAU','GENERAL','PROPIO']);
            $table->double('TM_RECEIVED')->default(0);
            $table->double('PRICE_RECEIVED')->default(0);
            $table->double('IMPORT_TOTAL')->default(0);
            $table->bigInteger('form_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priceclosings');
    }
};
