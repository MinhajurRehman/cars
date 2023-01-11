<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id('Id');   //booker id
            $table->string('name', 60);
            $table->string('email', 100);
            $table->string('number', 12);
            $table->string('country', 60);
            $table->string('address', 60);
            $table->string('city', 60);
            $table->enum('cars', ['Bugatti', 'I8', 'Mustang', 'Rolls_Royce', 'Porsche', 'GTR']);
            $table->enum('color', ['Black', 'Red', 'White', 'Yellow']);
            $table->enum('payment', ['Bank', 'Easypaisa', 'Jaazcash', 'Cash']);
            $table->timestamps();     //set date and time automatically
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
