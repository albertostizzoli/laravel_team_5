<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'characters',
            function (Blueprint $table) {
                $table->id();
                $table->string('name', 200);
                $table->text('description')->nullable();
                $table->int('type_id');
                $table->int('attack');
                $table->int('defence');
                $table->int('speed');
                $table->int('life');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');

    }
};
