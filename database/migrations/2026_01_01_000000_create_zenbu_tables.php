<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('dishes', function (Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('name_jp')->nullable(); $t->string('category')->index();
            $t->text('description'); $t->unsignedInteger('price_from'); $t->unsignedInteger('price_to')->nullable();
            $t->string('image'); $t->boolean('is_signature')->default(false); $t->timestamps();
        });
        Schema::create('outlets', function (Blueprint $t) {
            $t->id(); $t->string('name'); $t->string('city'); $t->string('address'); $t->string('phone');
            $t->string('map_query'); $t->timestamps();
        });
        Schema::create('reservations', function (Blueprint $t) {
            $t->id(); $t->foreignId('outlet_id')->constrained(); $t->string('name'); $t->string('phone'); $t->string('email');
            $t->date('date'); $t->string('time', 5); $t->unsignedTinyInteger('guests'); $t->text('notes')->nullable(); $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('reservations'); Schema::dropIfExists('outlets'); Schema::dropIfExists('dishes'); }
};
