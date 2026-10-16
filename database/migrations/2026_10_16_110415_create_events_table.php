<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('time');
            $table->string('address');
            $table->foreignId('trader_id')->constrained('traders');
            $table->timestamps();
        });

        Event::create([
            'name' => "Hullahoppozás a Balaton partja körül",
            'time' => '2026-12-10',
            'address' => 'Balaton',
            'trader_id' => Trader::query()->inRandomOrder()->valueOrFail('id')
        ]);

        Event::create([
            'name' => "Halloweeni vámpírvadászat",
            'time' => '2026-10-31',
            'address' => 'Vámpirhegyalja',
            'trader_id' => Trader::query()->inRandomOrder()->valueOrFail('id')
        ]);

        Event::create([
            'name' => "Majális",
            'time' => '2026-05-01',
            'address' => 'Budapest, Bikáspark',
            'trader_id' => Trader::query()->inRandomOrder()->valueOrFail('id')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
