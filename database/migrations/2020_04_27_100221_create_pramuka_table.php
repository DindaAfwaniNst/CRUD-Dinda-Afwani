<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePramukaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pramuka', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nik',9)->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->char('handphone',13);
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
        Schema::dropIfExists('pramuka');
    }
}
