<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccins', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("noSerie");
            $table->boolean("estDisponible")->default(1);
            $table->foreignId("type_vaccin_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("vaccins", function(Blueprint $table){
            $table->dropForeign("type_vaccin_id");
        });
        Schema::dropIfExists('vaccins');
    }
};
