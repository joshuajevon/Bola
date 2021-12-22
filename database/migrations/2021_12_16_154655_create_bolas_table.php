<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateBolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('club');
            $table->integer('number');
            $table->date('birthday');

            $table->unsignedBigInteger('status');
            $table->foreign('status')->references('id')->on('statuses')
                ->onUpdate('cascade')
                ->onDelete('cascade ');

            // $table->string('status');
            $table->string('note');
            $table->string('file');
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
        Schema::dropIfExists('bolas');
    }
}
