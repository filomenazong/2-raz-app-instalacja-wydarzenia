<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Tworzenie tab rentedrooms
     */
    public function up(): void
    {
        Schema::create('rentedrooms',  function (Blueprint $table) {
            $table->id();
            $table->integer('number_people');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->timestamps();//tworzy dwie kolumny created at updated at(zmiana na rekordzie) ->zapoisanie daty utworzenia lub aktualizacj
            $table->softDeletes();//przechowuje datę usunięcia miekkiego rekord oznaczany jako usunięty różna od null
            //dane przy standradowym usunięciu przy pobieraniu usuwane
        });
    }

    /**
     * Reverse the migrations.  ROLLBACK
     */
    public function down(): void
    {
        Schema::dropIfExists('rentedrooms');
    }
};
