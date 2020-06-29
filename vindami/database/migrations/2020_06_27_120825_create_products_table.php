<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->integer('price');
            $table->string('details')->nullable();
            $table->string('grape')->nullable();
            $table->string('taste')->nullable();
            $table->string('type')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('awards')->nullable();
            $table->string('stability')->nullable();
            $table->string('sulfur')->nullable();
            $table->string('winery')->nullable();
            $table->string('description')->nullable();
            $table->string('area')->nullable();
            $table->string('content')->nullable();
            $table->string('fits-with')->nullable();
            $table->string('winery-adress')->nullable();
            $table->string('control')->nullable();
            $table->string('sugar')->nullable();
            $table->string('img')->nullable();
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
        Schema::dropIfExists('products');
    }
}