<?php

use App\Models\Period;
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
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->Integer('year');
            $table->tinyInteger('month');
            $table->tinyInteger('biweekly');
            $table->date('date_start');
            $table->date('date_end');
            $table->date('date_limit');
            $table->string('status_description',50)->nullable();
            $table->enum('status',[Period::STATUS_ACTIVE,Period::STATUS_FINISHED])->default(Period::STATUS_ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periods');
    }
};
