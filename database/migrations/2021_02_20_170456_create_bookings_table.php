<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('user_id')->nullable();
            $table->string('booking_date')->nullable();
            $table->string('booking_time')->nullable();
            $table->string('from_address')->nullable();
            $table->string('from_latitude')->nullable();
            $table->string('from_longitude')->nullable();
            $table->string('to_address')->nullable();
            $table->string('to_latitude')->nullable();
            $table->string('to_longitude')->nullable();
            $table->string('service_id')->nullable();
            $table->string('service_name')->nullable();
            $table->string('billing_type')->nullable();
            $table->string('rate_per_km')->nullable();
            $table->string('rate_per_km_loaders')->nullable();
            $table->string('total_km')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('vat_amount')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->default('0');
            $table->string('assign_driver_id')->nullable();
            $table->string('assign_driver_date')->nullable();
            $table->string('assign_driver_time')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
