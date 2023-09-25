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
        Schema::create('konyvek', function (Blueprint $table) {
            $table->id("ko_id");
            $table->string("cim");
            $table->integer("isb");
            $table->integer("oldalsz");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konyvek');
    }
};
