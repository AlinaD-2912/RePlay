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
            $table->string('titre');
            $table->text('description')->nullable();
            $table->decimal('prix', 8, 2);
            $table->integer('quantite');
            $table->string('type');
            $table->string('etat');
            $table->string('classification-par-age', 10);
            $table->decimal('promotion_prix', 8, 2)->nullable()->after('prix');
            $table->boolean('is_promotion')->default(false);
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
