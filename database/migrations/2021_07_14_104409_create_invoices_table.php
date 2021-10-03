<?php

use App\Libraries\Gmo\Requests\CardPaymentRequest;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('user_id')->nullable();

            $table->string('OrderID');
            $table->string('AccessID');
            $table->string('AccessPass');
            $table->string('Method')->default(CardPaymentRequest::LUMP);
            $table->integer('Amount');
            $table->integer('Tax')->nullable()->default(0);

            $table->string('particulars')->nullable();
            $table->unsignedBigInteger('client_invoice_id')->nullable();
            $table->string('status')->default('pending');
            $table->string('callback_url');
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
        Schema::dropIfExists('invoices');
    }
}
