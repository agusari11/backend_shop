<?php

use App\Models\Category;
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
            $table->string(column: 'image');
            $table->string(column: 'title');
            $table->string(column: 'slug');
            $table->unsignedBigInteger(column: 'category_id');
            $table->text(column: 'content');
            $table->bigInteger(column: 'weight');
            $table->bigInteger(column: 'price');
            $table->integer(column: 'discount')->nullable();
            $table->timestamps();
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
