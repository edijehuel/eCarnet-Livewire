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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double("montantPaye");
            $table->dateTime("datePaiement");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("vaccination_id")->constrained();
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
        Schema::table('paiements', function(Blueprint $table){
            $table->dropConstrainedForeignId("user_id", "vaccination_id");
        });

        Schema::dropIfExists('paiements');
    }
};
