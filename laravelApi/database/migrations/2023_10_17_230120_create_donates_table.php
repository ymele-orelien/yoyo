<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('detail')->nullable();
            $table->enum("bloodGroup", ["A+", "A-","B+" ,"B-","AB+","AB-","O+","O-"])->nullable();
            $table->integer('poches')->nullable();
            $table->float('montant')->nullable();

$table->foreign('user_id')->references('id')->on('users')
        ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donates');
    }
};
