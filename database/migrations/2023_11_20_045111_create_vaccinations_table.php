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
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->dateTime("dateDebut");
            $table->timestamp("dateFin");
            $table->foreignId("patient_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->foreignId("statt_vaccinatuion_id")->constrained();
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
        Schema::table('vaccinations', function(Blueprint $table){
            $table->dropConstrainedForeignId("patient_id", "user_id", "statut_vaccination_id");
        });

        Schema::dropIfExists('vaccinations');
    }
};
