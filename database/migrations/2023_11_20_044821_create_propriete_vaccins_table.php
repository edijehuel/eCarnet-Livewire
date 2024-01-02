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
        Schema::create('propriete_vaccins', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->boolean("estObligatoire")->default(1);
            $table->foreignId("type_vaccin_id")->constrained();
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
        Schema::table('propriete_vaccins', function(Blueprint $table){
            $table->dropForeign("type_vaccin_id");
        });

        Schema::dropIfExists('propriete_vaccins');
    }
};
