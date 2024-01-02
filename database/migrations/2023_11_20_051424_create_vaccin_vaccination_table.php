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
        Schema::create('vaccin_vaccination', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("vaccin_id")->constrained();
            $table->foreignId("vaccination_id")->constrained();
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
        Schema::table('vaccin_vaccination', function(Blueprint $table){
            $table->dropConstrainedForeignId("vaccin_id", "vaccination_id");
        });
        Schema::dropIfExists('vaccin_vaccination');
    }
};
