<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id()
            ->comment('Уникальный номер');
            $table->text('password_hash')->nullable()
            ->comment('Хэш пароля');
            $table->integer('count_symbols')->nullable()
            ->comment('Кол-во символов');
            $table->text('variant_symbols')->nullable()
            ->comment('Варианты символов');
            $table->dateTime('created_at')
            ->comment('Время создания');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwords');
    }
}
