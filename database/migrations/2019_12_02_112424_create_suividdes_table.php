<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuividdesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suividdes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cinetudiant');
            $table->string('datedde');
            $table->string('attestationrecu');
        //php artisan migrate --path=/database/migrations/my_migration.php for specific migration 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suividdes');
    }
}
