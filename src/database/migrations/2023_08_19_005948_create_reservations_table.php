<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // unsigned big integer
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('shop_id')->nullable(false);
            $table->date('reservation_date')->nullable(false);
            $table->time('reservation_time')->nullable(false);
            $table->unsignedBigInteger('reservation_member')->nullable(false);
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
        Schema::dropIfExists('reservations');
    }
}
