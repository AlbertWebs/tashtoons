<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sitename', 191)->nullable();
            $table->string('logo', 191)->nullable();
            $table->string('logo_footer', 191)->nullable();
            $table->string('logo_two')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('email_one')->nullable();
            $table->string('mobile_one', 191)->nullable();
            $table->string('mobile_two', 191)->nullable();
            $table->string('mpesa')->nullable();
            $table->string('paypal')->nullable();
            $table->string('tagline', 191)->nullable();
            $table->string('url', 191)->nullable();
            $table->string('location', 191)->nullable();
            $table->string('map')->default('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske');
            $table->string('address', 191)->nullable();
            $table->string('facebook', 191)->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('twitter', 191)->nullable();
            $table->string('linkedin', 191)->nullable();
            $table->string('instagram', 191)->nullable();
            $table->string('youtube', 191)->nullable();
            $table->string('google', 191)->nullable();
            $table->text('risks')->nullable();
            $table->text('welcome')->nullable();
            $table->text('tawkTo')->nullable();
            $table->tinyInteger('tawkToStatus')->default(1);
            $table->tinyInteger('whatsAppStatus')->default(1);
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
        Schema::dropIfExists('site_settings');
    }
}
