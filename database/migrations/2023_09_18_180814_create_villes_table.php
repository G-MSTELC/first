<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Importez la classe DB

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->timestamps();
        });

        // Ajoutez les nouvelles villes à la table "villes"
        DB::table('villes')->insert([
            ['nom' => 'Ville 1'],
            ['nom' => 'Ville 2'],
            ['nom' => 'Ville 3'],
            ['nom' => 'Ville 4'],
            ['nom' => 'Ville 5'],
            ['nom' => 'Ville 6'],
            ['nom' => 'Ville 7'],
            ['nom' => 'Ville 8'],
            ['nom' => 'Ville 9'],
            ['nom' => 'Ville 10'],
            ['nom' => 'Ville 11'],
            ['nom' => 'Ville 12'],
            ['nom' => 'Ville 13'],
            ['nom' => 'Ville 14'],
            ['nom' => 'Ville 15'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villes');
    }
}
