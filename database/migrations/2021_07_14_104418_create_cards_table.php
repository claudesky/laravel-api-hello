<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');

            $table->string('CardSeq');
            $table->string('CardNo');
            $table->string('Forward');

            // Optional
            $table->string('Brand')->nullable();
            $table->string('DomesticFlag')->nullable();
            $table->string('IssuerCode')->nullable();
            $table->string('DebitPrepaidFlag')->nullable();
            $table->string('DebitPrepaidIssuerName')->nullable();
            $table->string('ForwardFinal')->nullable();

            $table->string('status')->default('pending');

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
        Schema::dropIfExists('cards');
    }
}
