<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 'id','name','email','regID','contact','fname','mname','college','image','eventID','address',
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('regID');
            $table->string('contact');
            $table->string('fname');
            $table->string('mname');
            $table->string('college');
            $table->string('image');
            $table->string('eventID');
            $table->string('address');
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
        Schema::dropIfExists('guests');
    }
}
