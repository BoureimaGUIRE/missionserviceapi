<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_mission', function (Blueprint $table) {
            $table->bigInteger('employe_id')->unsigned();
            $table->foreignId('mission_id')->constrained();
            $table->decimal('fraisHebergement');
            $table->decimal('fraisRetauration');
            $table->decimal('fraisTransport');
            $table->timestamps();
            $table->primary(['employe_id', 'mission_id']);
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
        Schema::table('detail_mission', function(Blueprint $table){
            $table->dropForeign('mission_id');
        });
        Schema::dropIfExists('detail_mission');
    }
}
