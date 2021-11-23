<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengusulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengusulan', function (Blueprint $table) {
            $table->id();
            $table->string("nama_warisan_budaya");
            $table->enum("kondisi", ['berkembang', 'bertahan', 'berkurang', 'terancam', 'punah']);
            $table->string("lokasi");
            $table->string("deskripsi");
            $table->json("pelaku");
            $table->string("foto");
            $table->string("video");
            $table->json("domain");
            $table->integer("user_id");
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
        Schema::dropIfExists('pengusulans');
    }
}
