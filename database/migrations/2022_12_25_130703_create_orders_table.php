<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->foreignId('product_id')->nullable()->constrained()->onDelete('SET NULL');
            $table->string('features')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('zip')->nullable();
            $table->text('address')->nullable();
            $table->float('amount')->nullable();
            $table->float('shipping')->nullable();
            $table->float('tax')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
