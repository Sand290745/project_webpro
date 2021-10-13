<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->date('birthday');
            $table->string('position');
            $table->string('zodiac');
            $table->integer('weight');
            $table->integer('height');
            $table->string('blood_type');
            $table->string('instagram');
            $table->text('ideal');
            $table->text('photo');
            $table->foreignId('group_id')->constrained();
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
        Schema::dropIfExists('artists');
    }
}
