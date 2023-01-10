<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->string('code');
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('information')->nullable();
            $table->string('keyword');
            $table->float('price');
            $table->float('tax')->nullable();
            $table->float('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->float('stock');
            $table->boolean('is_active')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
