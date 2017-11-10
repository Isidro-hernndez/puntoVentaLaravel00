<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->integer('venta_id')->unsigned();
            $table->foreign('venta_id')->references('idVenta')->on('venta');
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('idProducto')->on('productos');
            $table->float('importeVenta');
            $table->integer('cantidadVenta');
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
        Schema::dropIfExists('venta_detalle');
    }
}
