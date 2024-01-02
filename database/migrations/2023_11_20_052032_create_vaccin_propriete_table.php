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
        Schema::create('vaccin_propriete', function (Blueprint $table) {
            $table->foreignId("vaccin_id")->constrained();
            $table->foreignId("propriete_vaccin_id")->constrained();
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
        Schema::table('vaccin_propriete', function(Blueprint $table){
            $table->dropForeign("vaccin_id");
            $table->dropForeign("propriete_vaccin_id");
        });

        Schema::dropIfExists('vaccin_propriete');
    }
};
