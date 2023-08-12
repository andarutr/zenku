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
            $table->id();
            $table->string('name', 128);
            $table->string('email', 128)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('picture', 128);
            $table->unsignedBigInteger('role_id');
            $table->string('birthday', 25)->nullable();
            $table->string('whatsapp', 25)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('provinsi', 50)->nullable();
            $table->string('kota_administrasi', 50)->nullable();
            $table->integer('kode_pos')->nullable();
            $table->text('bio')->nullable();
            $table->string('status_kenegaraan', 25)->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
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
