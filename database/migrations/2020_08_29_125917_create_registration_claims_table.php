<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_claims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nomor_Polis',25);
            $table->date('Tanggal_kejadian');
            $table->time('Waktu_kejadian');
            $table->string('Penyebab',255);
            $table->string('Deskripsi_kejadian',255);
            $table->string('Estimasi_kerugian',255);
            $table->string('Nomor_rekening',25);
            $table->string('Nama_bank',20);
            $table->string('Nomor_Klaim',25);
            $table->integer('Status_klaim');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_claims');
    }
}
