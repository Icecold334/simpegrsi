<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Simpeg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->integer('present')->nullable();
            $table->integer('absent')->nullable();
            $table->integer('late')->nullable();
            $table->dateTime('time_in')->nullable();
            $table->dateTime('time_out')->nullable();
            $table->timestamps(0);

            $table->foreign('employee_id')->references('id')->on('employees');
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jabatan_id')->nullable();
            $table->unsignedBigInteger('fungsi_id');
            $table->unsignedBigInteger('umum_id');
            $table->unsignedBigInteger('trans_id');
            $table->unsignedBigInteger('khusus_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gol_id');
            $table->string('nama')->nullable();
            $table->string('nip')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('tmt')->nullable();
            $table->string('jk')->nullable();
            $table->timestamp('pensiun')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('pend_awal')->nullable();
            $table->integer('pend_penyesuaian')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('tgl_penyesuaian')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->string('status')->nullable();
            $table->timestamps(0);

            $table->foreign('jabatan_id')->references('id')->on('master_jabatan');
            $table->foreign('fungsi_id')->references('id')->on('master_fungsi');
            $table->foreign('umum_id')->references('id')->on('master_umum');
            $table->foreign('trans_id')->references('id')->on('master_trans');
            $table->foreign('khusus_id')->references('id')->on('master_khusus');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gol_id')->references('id')->on('master_golongan');
            $table->foreign('pend_awal')->references('id')->on('master_pendidikan');
            $table->foreign('pend_penyesuaian')->references('id')->on('master_pendidikan');
        });

        Schema::create('gaji_bruto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->integer('nom_jabatan')->nullable();
            $table->integer('nom_fungsi')->nullable();
            $table->integer('nom_umum')->nullable();
            $table->integer('nom_khusus')->nullable();
            $table->unsignedBigInteger('trans_id');
            $table->integer('nom_trans')->nullable();
            $table->integer('nom_pj_poskes')->nullable();
            $table->integer('nom_p_shift')->nullable();
            $table->integer('nom_lainnya')->nullable();
            $table->integer('total_bruto')->nullable();
            $table->timestamps(0);

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('trans_id')->references('id')->on('master_trans');
        });

        Schema::create('gaji_netto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('t_bruto_id')->nullable();
            $table->unsignedBigInteger('t_pot_id')->nullable();
            $table->integer('total_netto')->nullable();
            $table->timestamps(0);

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('t_bruto_id')->references('id')->on('gaji_bruto');
            $table->foreign('t_pot_id')->references('id')->on('potongan');
        });

        Schema::create('kenaikan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('gapok_id');
            $table->string('jenis_kenaikan')->nullable();
            $table->dateTime('tgl_naik')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps(0);

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('gapok_id')->references('id')->on('master_gapok');
        });

        Schema::create('log', function (Blueprint $table) {
            $table->id();
            $table->string('table')->nullable();
            $table->string('value')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_fungsi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nominal')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_gapok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gol_id');
            $table->string('masa_kerja')->nullable();
            $table->string('nominal_gapok')->nullable();
            $table->timestamps(0);

            $table->foreign('gol_id')->references('id')->on('master_golongan');
        });

        Schema::create('master_golongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kualifikasi')->nullable();
            $table->integer('nominal')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_jam', function (Blueprint $table) {
            $table->id();
            $table->dateTime('enrty')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_khusus', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nominal')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('minim_gol')->nullable();
            $table->integer('maxim_gol')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_penyesuaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendidikan_awal')->nullable();
            $table->unsignedBigInteger('pendidikan_penyesuaian')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->timestamps(0);

            $table->foreign('pendidikan_awal')->references('id')->on('master_pendidikan');
            $table->foreign('pendidikan_penyesuaian')->references('id')->on('master_pendidikan');
        });

        Schema::create('master_potongan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fungsi_id')->nullable();
            $table->string('nama')->nullable();
            $table->integer('nominal')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps(0);

            $table->foreign('fungsi_id')->references('id')->on('master_fungsi');
        });

        Schema::create('master_trans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nom_makan')->nullable();
            $table->integer('nom_transport')->nullable();
            $table->timestamps(0);
        });

        Schema::create('master_umum', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nominal')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps(0);
        });

        Schema::create('potongan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->integer('simpanan_wajib')->nullable();
            $table->integer('simpanan_pokok')->nullable();
            $table->integer('ibi')->nullable();
            $table->integer('idi')->nullable();
            $table->integer('ppni')->nullable();
            $table->integer('pinjam_kop')->nullable();
            $table->integer('obat')->nullable();
            $table->integer('a_b')->nullable();
            $table->integer('a_p')->nullable();
            $table->integer('dansos')->nullable();
            $table->integer('dplk')->nullable();
            $table->integer('bpjs_tk')->nullable();
            $table->integer('bpjs_kes')->nullable();
            $table->timestamps(0);

            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potongan');
        Schema::dropIfExists('master_umum');
        Schema::dropIfExists('master_trans');
        Schema::dropIfExists('master_potongan');
        Schema::dropIfExists('master_penyesuaian');
        Schema::dropIfExists('master_pendidikan');
        Schema::dropIfExists('master_khusus');
        Schema::dropIfExists('master_jam');
        Schema::dropIfExists('master_jabatan');
        Schema::dropIfExists('master_golongan');
        Schema::dropIfExists('master_gapok');
        Schema::dropIfExists('master_fungsi');
        Schema::dropIfExists('log');
        Schema::dropIfExists('kenaikan');
        Schema::dropIfExists('gaji_netto');
        Schema::dropIfExists('gaji_bruto');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('absensi');
    }
}
