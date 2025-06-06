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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id bigInteger unsigned primary key auto_increment
            // $table->tinyInteger('category_id')->unsigned();
            $table->text('product_name');
            $table->double('price');
            $table->integer('quantity')->unsigned();
            $table->tinyInteger('warranty')->unsigned();
            $table->text('description')->nullable();
            $table->timestamps(); // created_at DateTime , updated_at TimeStamp

            // $table->foreign('category_id')
            //       ->references('id')
            //       ->on('categories')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
