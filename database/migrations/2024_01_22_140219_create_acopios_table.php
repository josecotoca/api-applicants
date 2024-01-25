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
        Schema::create('acopios', function (Blueprint $table) {
            $table->id();
            $table->double('TM_BRUTO')->default(0);
            $table->double('TM_LIQUIDO')->default(0);
            $table->string('vendor_ci')->nullable();
            $table->string('vendor_nit')->nullable();
            $table->string('vendor_name');
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
        Schema::dropIfExists('acopios');
    }
};
