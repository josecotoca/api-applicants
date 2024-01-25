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
        Schema::create('exp', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_ci')->nullable();
            $table->string('vendor_nit')->nullable();
            $table->string('vendor_name');
            $table->integer('invoice_number');
            $table->date('invoice_date');
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('product_name');
            $table->double('TM_quantity')->default(0);
            $table->double('TM_price_usd')->default(0);
            $table->double('TOTAL_usd')->default(0);
            $table->bigInteger('form_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exp');
    }
};
