<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGmoCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gmo_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gmo_member_id')->constrained();
            $table->foreignId('card_id')->nullable()->constrained();

            $table->string('CardSeq');
            $table->string('CardNo');
            $table->string('Forward');

            $table->string('Brand')->nullable();
            $table->string('DomesticFlag')->nullable();
            $table->string('IssuerCode')->nullable();
            $table->string('DebitPrepaidFlag')->nullable();
            $table->string('DebitPrepaidIssuerName')->nullable();
            $table->string('ForwardFinal')->nullable();

            $table->string('status')->default('active');
            $table->softDeletes();
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
        Schema::dropIfExists('gmo_cards');
    }
}
