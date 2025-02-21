<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pseudo')->nullable()->change();  // Permet de laisser la colonne pseudo vide
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pseudo')->nullable(false)->change();  // Rétablit la contrainte NOT NULL
        });
    }
};

