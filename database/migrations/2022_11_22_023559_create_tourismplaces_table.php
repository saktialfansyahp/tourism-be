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
        Schema::create('tourismplaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('imageAsset');
            $table->string('listImage1');
            $table->string('listImage2');
            $table->string('listImage3');
            $table->string('listImage4');
            $table->string('deskripsi');
            $table->string('jamBuka');
            $table->string('tiket');
            $table->string('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourismplaces');
    }
};
