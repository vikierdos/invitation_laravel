<?php

use App\Models\Trader;
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
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('country');
            $table->timestamps();
        });

        Trader::create([
            'name' => "Trader 1 - nagyon jó",
            'description' => 'Valamilyen nagyon jó trader',
            'country' => 'HUNGARY',
        ]);

        Trader::create([
            'name' => "Trader 2, kíváló",
            'description' => 'Igazából azt se tudom mi az a trader',
            'country' => 'GERMANY',
        ]);

        Trader::create([
            'name' => "Trader 3 - elmegy egynek",
            'description' => 'Igazából, a másikat választanám a helyetekben',
            'country' => 'HUNGARY',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};
