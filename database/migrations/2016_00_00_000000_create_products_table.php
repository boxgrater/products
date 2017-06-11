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
            $table->increments('id');
            $table->string('plu');
            $table->string('brand');
            $table->string('name');
            $table->text('description');
            $table->integer('merchant_id')->unsigned();
            $table->decimal('purchase_price', 15, 2);
            $table->integer('purchase_qty');
            $table->string('purchase_uom');
            $table->integer('pack_qty');
            $table->integer('pack_size');
            $table->string('pack_uom');

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
