<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePencatatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencatatan', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->enum("kondisi", ['berkembang', 'bertahan', 'berkurang', 'terancam', 'punah']);
            $table->string("lokasi");
            $table->mediumText("deskripsi");
            $table->string("pelaku")->nullable();
            $table->string("foto")->nullable();
            $table->string("video")->nullable();
            $table->string("domain");
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
        Schema::dropIfExists('pencatatans');
    }
}
