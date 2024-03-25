<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizen', function (Blueprint $table) {
            $table->string('id', 16)->primary();
            $table->string('name', 100);
            $table->string('address', 300);
            $table->date('birth_date');
            $table->string('blood_type', 2);
            $table->string('religion', 45);
            $table->string('family_card_id', 16);
            $table->foreign('family_card_id')->references('id')
                ->on('family_card')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('citizens');
    }
}
