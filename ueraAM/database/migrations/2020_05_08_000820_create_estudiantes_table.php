<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('ced_asp');
            $table->string('nom_asp');
            $table->string('ape_asp');
            $table->string('lug_nac_asp');
            $table->date('fec_nac_asp');
            $table->integer('her_asp')->nullable();
            $table->integer('lug_asp');
            $table->string('nac_asp');
            $table->string('etn_asp');
            $table->string('ema_asp');
            $table->string('par_asp');
            $table->string('bar_asp');
            $table->string('cal_pri_asp');
            $table->string('cal_sec_asp');

            $table->string('ced_mad');
            $table->string('nom_mad');
            $table->string('ape_mad');
            $table->string('est_civ_mad');
            $table->string('pro_mad');
            $table->string('lug_tra_mad');
            $table->string('tel_mad');
            $table->string('cel_mad');
            $table->string('ema_mad');

            $table->string('ced_pad');
            $table->string('nom_pad');
            $table->string('ape_pad');
            $table->string('est_civ_pad');
            $table->string('pro_pad');
            $table->string('lug_tra_pad');
            $table->string('tel_pad');
            $table->string('cel_pad');
            $table->string('ema_pad');

            $table->string('ced_rep');
            $table->string('nom_rep');
            $table->string('ape_rep');
            $table->string('est_civ_rep');
            $table->string('pro_rep');
            $table->string('lug_tra_rep');
            $table->string('tel_rep');
            $table->string('cel_rep');
            $table->string('ema_rep');

            $table->string('grado_asp')->nullable();
            $table->string('proc_asp')->nullable();
            $table->string('ciu_ins_proc_asp')->nullable();
            $table->string('pago_asp')->nullable();
            $table->string('fec_pago_asp')->nullable();
            $table->string('foto_asp')->nullable();

            $table->boolean('estado_asp')->nullable();

            //datos para la factura
            $table->string('ced_fac')->nullable();
            $table->string('nom_fac')->nullable();
            $table->string('ape_fac')->nullable();
            $table->string('ema_fac')->nullable();
            $table->string('dir_fac')->nullable();
            $table->string('tel_fac')->nullable();


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
        Schema::dropIfExists('estudiantes');
    }
}
