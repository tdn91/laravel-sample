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
            $table->string('name', 50)->unique();
            $table->string('description')->nullable(true);

            $table->bigInteger('user_id', false, true);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');

            $table->smallInteger('category_id', false, true);
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->smallInteger('country_id', false, true);
            $table->foreign('country_id')
                ->references('id')
                ->on('countries');

            $table->tinyInteger('status_id', false, true);
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');

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
