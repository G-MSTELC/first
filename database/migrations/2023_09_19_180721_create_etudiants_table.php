<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('date_de_naissance');
            $table->unsignedBigInteger('ville_id');
            $table->timestamps();

            // Clé étrangère vers la table "villes"
            $table->foreign('ville_id')->references('id')->on('villes');
        });

        // Insérer 100 nouveaux étudiants
        for ($i = 1; $i <= 100; $i++) {
            DB::table('etudiants')->insert([
                'nom' => 'Nom Étudiant ' . $i,
                'adresse' => 'Adresse Étudiant ' . $i,
                'phone' => 'Phone Étudiant ' . $i,
                'email' => 'etudiant' . $i . '@example.com',
                'date_de_naissance' => '2000-01-01', // Remplacez par la date de naissance souhaitée
                'ville_id' => random_int(1, 15), // Assurez-vous d'avoir 15 villes dans votre table villes
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
