<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('email', 128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('picture', 128);
            $table->unsignedInteger('id_role');
            $table->string('birthday', 25)->nullable();
            $table->string('whatsapp', 25)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->unsignedInteger('id_provinsi')->nullable();
            $table->unsignedInteger('id_kota_administrasi')->nullable();
            $table->integer('kode_pos')->nullable();
            $table->text('bio')->nullable();
            $table->string('status_kenegaraan', 25)->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_role')->references('id_role')->on('roles');
            $table->foreign('id_provinsi')->references('id_provinsi')->on('provinsi');
            $table->foreign('id_kota_administrasi')->references('id_kota_administrasi')->on('kota_administrasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
