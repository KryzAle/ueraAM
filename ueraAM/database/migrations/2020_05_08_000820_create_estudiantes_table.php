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
            $table->string('ced_asp')->nullable();
            $table->string('nom_asp')->nullable();
            $table->string('ape_asp')->nullable();
            $table->string('lug_nac_asp')->nullable();
            $table->date('fec_nac_asp')->nullable();
            $table->integer('her_asp')->nullable();
            $table->integer('lug_asp')->nullable();
            $table->string('nac_asp')->nullable();
            $table->string('etn_asp')->nullable();
            $table->string('ema_asp')->nullable();
            $table->string('par_asp')->nullable();
            $table->string('bar_asp')->nullable();
            $table->string('cal_pri_asp')->nullable();
            $table->string('cal_sec_asp')->nullable();

            $table->string('ced_mad')->nullable();
            $table->string('nom_mad')->nullable();
            $table->string('ape_mad')->nullable();
            $table->string('est_civ_mad')->nullable();
            $table->string('pro_mad')->nullable();
            $table->string('lug_tra_mad')->nullable();
            $table->string('tel_mad')->nullable();
            $table->string('cel_mad')->nullable();
            $table->string('ema_mad')->nullable();

            $table->string('ced_pad')->nullable();
            $table->string('nom_pad')->nullable();
            $table->string('ape_pad')->nullable();
            $table->string('est_civ_pad')->nullable();
            $table->string('pro_pad')->nullable();
            $table->string('lug_tra_pad')->nullable();
            $table->string('tel_pad')->nullable();
            $table->string('cel_pad')->nullable();
            $table->string('ema_pad')->nullable();

            $table->string('ced_rep')->nullable();
            $table->string('nom_rep')->nullable();
            $table->string('ape_rep')->nullable();
            $table->string('est_civ_rep')->nullable();
            $table->string('pro_rep')->nullable();
            $table->string('lug_tra_rep')->nullable();
            $table->string('tel_rep')->nullable();
            $table->string('cel_rep')->nullable();
            $table->string('ema_rep')->nullable();

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

            //datos adicionales

            $table->string('fe_asp')->nullable();
            $table->string('vac_asp')->nullable();
            $table->string('exp_asp')->nullable();
            $table->string('dce_asp')->nullable();
            $table->string('cerp_asp')->nullable();
            $table->string('cerc_asp')->nullable();
            $table->string('cedula_asp')->nullable();
            $table->string('cedula_mad')->nullable();
            $table->string('cedula_pad')->nullable();
            $table->string('cedula_rep')->nullable();

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
