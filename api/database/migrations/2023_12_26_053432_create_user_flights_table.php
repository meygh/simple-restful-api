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
        Schema::create('user_flights', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // Equals passport number

            // TODO: should be a relation between then user_id and users table, then uncomment this part.
            /*$table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();*/

            $table->string('departure_airport', 4);
            $table->string('destination_airport', 4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_flights');
    }
};
