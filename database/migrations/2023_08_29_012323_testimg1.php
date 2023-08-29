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
        Schema::create('profileinfos', function (Blueprint $table) {
            $table->id();
            $table->string('image1');
            $table->string("projname1");
            $table->text("projdescription1");
            $table->string('image2');
            $table->string("projname2");
            $table->text("projdescription2");
            $table->string('image3');
            $table->string("projname3");
            $table->text("projdescription3");
            $table->string('image4');
            $table->string("projname4");
            $table->text("projdescription4");
            $table->string('image5');
            $table->string("projname5");
            $table->text("projdescription5");
            $table->string('image6');
            $table->string("projname6");
            $table->text("projdescription6");
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
        Schema::dropIfExists('profileinfos');
    }
};
