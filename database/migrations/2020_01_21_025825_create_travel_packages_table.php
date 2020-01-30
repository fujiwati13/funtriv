<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->longtext('about');
            $table->string('featured_event');
            $table->string('language');
            $table->string('foods');
            $table->date('departure_date');
            $table->string('duration');
            $table->string('type');
            $table->double('price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /* cara jalanin migration jika db nya sudah di setting di .env tinggal jalanin di cmd yaitu : php artisan migrate*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_packages');
    }
}
