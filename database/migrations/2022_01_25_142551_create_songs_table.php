<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->foreignId('album_id');
            $table->string('title',100);
            $table->date('date_of_publication')->nullable($value = true);
            $table->string('produced_by',100)->nullable($value = true);
            $table->unsignedBigInteger('views_on_spotify')->nullable($value = true);





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
        Schema::dropIfExists('songs');
    }
}
