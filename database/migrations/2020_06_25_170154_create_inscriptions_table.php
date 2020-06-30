<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nomComplet');
            $table->string('dateNissance');
            $table->enum('sexe',['homme','femme']);
            $table->string('telephone')->unique()->index();
            $table->string('email')->unique()->index();
            $table->string('adresse')->index();
            $table->string('ville')->index();
    
            $table->string('diplome')->nullable()->index();
            $table->string('cnss')->nullable()->index();
            $table->string('dateCnss');
            $table->string('cartCNI')->nullable();
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
        Schema::dropIfExists('inscriptions');
    }
}
