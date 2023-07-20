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
            $table->id();
            $table->string("name", 100)->nullable(false);
            $table->bigInteger("price")->nullable(false)->default(0);
            $table->integer("stock")->nullable(false)->default(0);
            $table->unsignedBigInteger("category_id")->nullable(false);
            $table->timestamps();
            $table->foreign("category_id")->on("categories")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
